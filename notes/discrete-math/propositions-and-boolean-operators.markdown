# Propositions and boolean operators
We use math in computer science for a variety of reasons. For example, it's  pretty common for people to use mathematical notation to describe their ideas. Or, they might use math to show that something is true. In this series of notes, we’ll talk about commonly used mathematical notation, concepts, and techniques.

## Propositions
A *boolean* variable (named after [George Boole][1]) is a variable that is either `true` or `false`. A statement that's either `true` or `false` is called a *proposition* (sometimes also called a *predicate* or a *statement*). For example, "I was born in December" is either `true` or `false`, depending on who you are. "1 + 1 = 2" is a proposition that is always `true`.

More examples of propositions:

  * "I'll get heads when I flip a coin."
  * "The full moon will be out tonight."

Not propositions:

  * "The number I get when I roll a fair die."
  * "The meaning of life."

## Operators
We can combine two propositions together to form a new proposition. We call these *operations*. The most common operations are `not`, `and`, `or`, `xor`, and `implies`.

### Not
`Not` is very simple. Suppose our proposition is "I was born in December." Let's call this proposition $a$. Then `not` $a$ is something like "I was not born in December." Something that is `not true` is `false`, and something that is `not false` is `true`.

The common mathematical notation for `not` is $\neg A$.

### And

`And` is also easy to understand. Suppose $a$ is "I was born in December" and $b$ is "I was born on the 5th day of the month." Then $a$ `and` $b$ (notated $a \land b$) is only `true` if you were born on December 5.

Sometimes we like to write out what are called truth tables. This truth table lists all possible values of $a$ and $b$ in the first two columns, and then shows the result of $a \land b$ on the right:

$a$ | $b$ | $a \land b$
--- | --- | -----------
`true` | `true` | `true`
`true` | `false` | `false`
`false` | `true` | `false`
`false` | `false` | `false`

### Or
When discussing logic, `or` means something a little bit different than how we normally use it. For example, when you say, "You can have a slice of cake for dessert, or you can have a slice of pie," you don't mean they can have both. But, in logic, $a$ `or` $b$ (notated $a \lor b$) means either $a$ is `true`, or $b$ is `true`, or both are `true`.

The truth table for `or` looks like this:

$a$ | $b$ | $a \lor b$
--- | --- | ----------
`true` | `true` | `true`
`true` | `false` | `true`
`false` | `true` | `true`
`false` | `false` | `false`

### Xor
In our previous example, we said "You can have a slice of cake, or a slice of pie," and by that we meant that they couldn't have both. This is what `xor` (exclusive-or) is. $a$ `xor` $b$ (notated $a \oplus b$) is only `true` if $a$ is `true`, or $b$ is `true`, but not both. Another way to think about it is that $a$ `xor` $b$ is only `true` if $a$ and $b$ have different truth values.

Here's the truth table for X`or`:

$a$ | $b$ | $a \oplus b$
--- | --- | ------------
`true` | `true` | `true`
`true` | `false` | `true`
`false` | `true` | `true`
`false` | `false` | `false`

### Nand and nor

`Nand` and `nor` mean `not and` and `not or`. They take on the opposite truth values of `and` and `or`.

### Implications

The last operator we need to talk about is `implies`. It can be difficult, to understand, but it is also very important -- so important, the entire next page is devoted to it.

## Questions
  1. Here's an empty truth table with two variables. Fill in the last column with some values. How many possible ways are there to fill out the last column?
    $a$ | $b$ | $f(a, b)$
    --- | --- | ---------
    `true` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `true` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>

  2.  Here's an empty truth table with three variables. How many possible truth tables are there now? How many possible truth tables would there be if we had $n$ variables?
    $a$ | $b$ | $c$ | $f(a, b, c)$
    --- | --- | --- | ------------
    `true` | `true` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `true` | `true` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `true` | `false` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `true` | `false` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `true` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `true` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `false` | `true` | <input type="radio">`true`</input> <input type="radio">`false`</input>
    `false` | `false` | `false` | <input type="radio">`true`</input> <input type="radio">`false`</input>

> Written with [StackEdit](https://stackedit.io/).

  [1]: http://en.wikipedia.org/wiki/George_Boole
  [2]: test
