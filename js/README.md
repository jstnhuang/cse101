# truthtable.js
truthtable.js takes in a list of variables and logical expressions, and generates truth tables from them. To use truthtable.js, use the truth-table.html fragment. Unfortunately, unlike the code shown below, the `{% include ... %}` must all be on one line.

```
{% include truth-table.html
  id="implies"
  vars="['A', 'B']"
  exprs="[new TTImplies('A', 'B')]"
  hiddenExprs="{}"
%}

{% include truth-table.html
  id="implies-formula"
  vars="['A', 'B']"
  exprs="[new TTNot('A'), new TTOr(new TTNot('A'), 'B')]"
  hiddenExprs="{1: true}"
%}
```

The parameters are:
<dl>
  <dt><code>id</code></dt>
  <dd>The id of the table element in the DOM. The table element is created in truth-table.html, so you don't need to add it yourself when writing notes. However, you do need to make sure that the ID is unique to all DOM nodes on the page.</dd>
  <dt><code>vars</code></dt>
  <dd>A Javascript array of variable names, as strings. They will be displayed in the given order.</dd>
  <dt><code>exprs</code></dt>
  <dd>A Javascript array of logical expressions (more below). They will be displayed in the given order.</dd>
  <dt><code>hiddenExprs</code></dt>
  <dd>A Javascript object where the keys are indices (starting at 0) in the <code>exprs</code> array, and the value is true. Normally, the column of each expression would be filled out for you. Listing an index here will replace that with a dropdown menu instead, so that people can fill out the truth tables on their own.</dd>
</dl>

The available expressions to put in `exprs` are:

* `TTAnd(e1, e2)`
* `TTOr(e1, e2)`
* `TTNot(e1)`
* `TTXor(e1)`
* `TTImplies(e1)`
* `TTNand(e1, e2)`
* `TTNor(e1, e2)`
* `TTIff(e1, e2)`

The parameters `e1` and `e2` can be other expressions, or variable names from `vars`, given as strings.
