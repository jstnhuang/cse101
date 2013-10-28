---
title: Implications
layout: note
---

# Implications

`Implies` can be a difficult operator to understand. But, we will use it often. There are many different ways to say $a$ `implies` $b$ (notated $a \to b$):

* $a$ `implies` $b$
* $b$ is implied by $a$
* $a \to b$
* If $a$, then $b$
* $b$ if $a$

What it means for $a$ `implies` $b$ to be `true` is that if $a$ is `true`, then $b$ must also be `true`. If $a$ is `false`, then it doesn't matter what $b$ is -- $a$ `implies` $b$ will be `true`. Here it is in a truth table:

$a$ | $b$ | $a \to b$
--- | --- | ---------
`true` | `true` | `true`
`true` | `false` | `false`
`false` | `true` | `true`
`false` | `false` | `true`

## Examples
Some examples may help clarify how this works.

### Number line
Suppose $a$ = "$x > 5$" and $b$ = "$x > 0$". In this case, $a \to b$ = `true`, because whenever you have a number greater than 5, it must also be greater than 0.

Now suppose $a$ = "$x > -5$" and $b$ = "$x > 0$". Does $a$ imply
  $b$? No. If $x = -3$, then $a$ is `true`, but $b$ is `false`. So
  $a \to b$ is `false`. $a$ being `true` should guarantee that $b$ is `true`.

### Checking IDs

Imagine being in a restaurant, and let $a$ = "The customer is drinking something alcoholic" and $b$ = "The customer is aged 21 or over." (This is a US-centric example, where the legal drinking age is 21.) You see four customers with drinks:

1.  One is drinking a beer.
2.  One is drinking a soda.
3.  One is age 25.
4.  One is age 18.

Whose drinks/IDs do you need to check to see if $a \to b$ = `true` for every customer? The answer is obvious, but let's check the truth table:

$a$ | $b$ | $a \to b$
--- | --- | ---------
Drinking beer | 25 year old | `true`
Drinking beer | 18 year old | `false`
Drinking soda | 25 year old | `true`
Drinking soda | 18 year old | `true`

As you can see, $a \to b$ is `false` if the customer is drinking a beer and is 18, so you should check the customer drinking a beer, and the customer who's 18\. Notice that if $a$ is `false` (the customer's drinking a soda), then $a \to b$ = `true` no matter what $b$ is. This is the case for all implications. If $a$ is `false`, then $a \to b$ is always `true`. But if $a$ is `true`, then $a \to b$ is only `true` if $b$ is `true` as well.

## Inverse, converse, and contrapositive
There are special names for when you rearrange or negate $a$ and $b$. Given $a \to b$,

* $\neg a \to \neg b$ is the inverse.
* $b \to a$ is the converse.
* $\neg b \to \neg a$ is the contrapositive.

Suppose your friend tells you, "if it's sunny tomorrow, then I'll go for a run." Let's also say that there are only two possibilities for the weather: sun or rain. Here are the inverse, converse, and contrapositive of that statement:

* Inverse: "If it rains tomorrow, then I won't go for a run."
* Converse: "If I go for a run tomorrow, then it's sunny."
* Contrapositive: "If I don't go for a run tomorrow, then it rained."

Suppose your friend's statement is `true`. Here are three tough questions:

1. Must the inverse be `true`?
2. Must the converse be `true`?
3. And must the contrapositive be `true`?

The answer is, surprisingly, that the contrapositive must be `true`, but neither the inverse nor the converse have to be `true`. In the next page of notes, we'll prove this. But, for now, let's think about it intuitively.

Suppose your friend is a star runner who runs on most days, rain or shine. Your friend told you that if it didn't rain tomorrow, she would go for a run. But she didn't tell you what she would do if it didn't rain. She could stay at home, or she could go for a run anyway, in which case the inverse is `false`.

The converse isn't guaranteed to be `true` for the same reason. Your friend could have gone for a run whether it was rainy or not.

Thinking about whether the contrapositive is always `true` is the hardest of them all. Either it was sunny or it rained.

  * If it was sunny outside, then your friend must have gone for a run.
  * If it rained, your friend may have gone for a run, but also may not have.

So as we can see, the only time your friend wouldn't have gone for a run is if it was rainy outside.
  
## Questions


1. Write out the truth table for $(\neg a) \lor b$. What do you notice? Can you explain why this makes sense?

    $a$ | $b$ | $(\neg a) \lor b$
    --- | --- | ---------
    `true` | `true` | <select><option value=""></option><option value="True">True</option><option value="False">False</option></select>
    `true` | `false` | <select><option value=""></option><option value="True">True</option><option value="False">False</option></select>
    `false` | `true` | <select><option value=""></option><option value="True">True</option><option value="False">False</option></select>
    `false` | `false` | <select><option value=""></option><option value="True">True</option><option value="False">False</option></select>

2. There are four cards on a table. Each card has a side that's either red or blue, and a side with a number. Your friend tells you that if the card is red, then the other side must have an even number. The four cards you see are:

    *   Red
    *   2
    *   Blue
    *   1

    Which cards do you need to flip over to see if your friend is right?

3.  What is the inverse, the converse, and the contrapositive of "If a customer is drinking alcohol, he must be 21 or over"?
