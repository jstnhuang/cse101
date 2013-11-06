function TruthTable(vars, exprs) {
  this.vars = vars;
  this.exprs = exprs;
}

TruthTable.prototype.instantiations = function() {
  return this._instantiations([{}], this.vars.slice(0));
}

TruthTable.prototype._instantiations = function(instantiations, vars) {
  if (vars.length === 0) {
    return instantiations;
  }

  currentVar = vars.shift();
  result = []
  for (index in instantiations) {
    instantiation = instantiations[index];
    instantiation[currentVar] = true;
    result.push(instantiation);

    falseInstantiation = {}
    for (key in instantiation) {
      falseInstantiation[key] = instantiation[key];
    }
    falseInstantiation[currentVar] = false;
    result.push(falseInstantiation);
  }
  return this._instantiations(result, vars);
}

TruthTable.prototype.evaluate = function(expr, symtab) {
  var a;
  if (symtab.hasOwnProperty(expr.a)) {
    a = symtab[expr.a];
  } else {
    a = this.evaluate(expr.a, symtab);
  }
  if (expr.constructor.name === 'TTNot') {
    return !a;
  }
  
  var b;
  if (symtab.hasOwnProperty(expr.b)) {
    b = symtab[expr.b];
  } else {
    b = this.evaluate(expr.b, symtab);
  }
  switch(expr.constructor.name) {
    case 'TTAnd': return a && b;
    case 'TTOr': return a || b;
    case 'TTXor': return a !== b;
    case 'TTImplies': return (!a) || b;
    case 'TTIff': return a === b;
  }
}

TruthTable.prototype.latex = function(expr) {
  var aLatex;
  if (expr.a.constructor.name === 'String') {
    aLatex = expr.a;
  } else {
    aLatex = this.latex(expr.a);
  }
  if (expr.constructor.name === 'TTNot') {
    return '(\\neg ' + aLatex + ')';
  }
  
  var bLatex;
  if (expr.b.constructor.name === 'String') {
    bLatex = expr.b;
  } else {
    bLatex = this.latex(expr.b);
  }
  var op;
  switch(expr.constructor.name) {
    case 'TTAnd': return '(' + aLatex + ' \\land ' + bLatex + ')';
    case 'TTOr': return '(' + aLatex + ' \\lor ' + bLatex + ')';
    case 'TTXor': return '(' + aLatex + ' \\oplus ' + bLatex + ')';
    case 'TTImplies': return '(' + aLatex + ' \\to ' + bLatex + ')';
    case 'TTIff': return '(' + aLatex + ' \\leftrightarrow ' + bLatex + ')';
  }
}

TruthTable.prototype.render = function(divId, hiddenExprs) {
  var table = $('#' + divId);
  var instantiations = this.instantiations();
  var header = $('<tr>');
  for (vIndex in this.vars) {
    var v = this.vars[vIndex];
    var col = '<th>$' + v + '$</th>';
    header.append(col);
  }
  for (exprIndex in this.exprs) {
    var expr = this.exprs[exprIndex];
    var latex = this.latex(expr);
    var col = '<th>$' + latex + '$</th>';
    header.append(col);
  }
  table.append(header);
  for (instIndex in instantiations) {
    symtab = instantiations[instIndex];
    var row = $('<tr>');
    for (vIndex in this.vars) {
      var v = this.vars[vIndex];
      var col = '<td>' + symtab[v] + '</td>';
      row.append(col);
    }
    for (exprIndex in this.exprs) {
      if (
        hiddenExprs.hasOwnProperty(exprIndex)
        && hiddenExprs[exprIndex] === true
      ) {
        var col = '<td><select><option value=""></option><option value="true">true</option><option value="false">false</option></select></td>';
        row.append(col);
      } else {
        var expr = this.exprs[exprIndex];
        var val = this.evaluate(expr, symtab);
        var col = '<td>' + val + '</td>';
        row.append(col);
      }
    }
    table.append(row);
  }
}

function TTAnd(a, b) {
  this.a = a;
  this.b = b;
}

function TTOr(a, b) {
  this.a = a;
  this.b = b;
}

function TTNot(a) {
  this.a = a;
}

function TTXor(a, b) {
  this.a = a;
  this.b = b;
}

function TTNand(a, b) {
  return new TTNot(new TTAnd(a, b));
}

function TTNor(a, b) {
  return new TTNot(new TTOr(a, b));
}

function TTImplies(a, b) {
  this.a = a;
  this.b = b;
}

function TTIff(a, b) {
  this.a = a;
  this.b = b;
}
