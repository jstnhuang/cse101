---
title: Point estimation
layout: note
---

# Point estimation

Every machine learning algorithm uses a *model* to describe how the world works. The model makes assumptions and simplifies the world, but in a (hopefully) useful way. Models have parameters, which alter how the model behaves. *Learning* is the process of finding values for the parameters that best explain the world.

In this example, we'll look at a very simple model that has just one parameter. Because we're only trying to estimate the value of one parameter, this is called *point estimation*.

## Example: coin flip

Suppose we have a potentially unfair coin, and we want to know what the likelihood of getting a heads or tails is. We'll call the probability of flipping heads $\theta$. We also have a dataset $D$ of 10 coin flips:

> H, T, H, T, T, H, H, T, T, T

### Model
In this case, our model will be the [binomial distribution](http://en.wikipedia.org/wiki/Binomial_distribution). This model assumes that each coin flip is *independent*, since each flip has no effect on any other flip. It also assumes that the probability of getting heads will be the same for each flip.

Because each flip is independent, the probability of the sequence of flips in $D$ is the product of the probability of each individual flip. So if we have $n_h$ heads and $n_t$ tails, the model gives the probability of our dataset as:

$$p(D \mid \theta) = \theta^{n_h} (1 - \theta)^{n_t}$$

### Learning $\theta$

Our model has just one parameter, $\theta$. We want to find the value of $\theta$ that best explains (i.e., maximizes the probability of) $D$. Let's call our estimate $\hat{\theta}$:
$$\begin{align}
    \hat{\theta} & = \argmax_\theta p(D \mid \theta) \\\\
      & = \argmax_\theta \theta^{n_h} (1 - \theta)^{n_t}
\end{align}$$

For reasons that will become clear in a moment, we will actually find $\theta$ that maximizes the log probability $\ln p(D \mid \theta)$. This will make our equations simpler, and has no effect on the argmax:

$$\hat{\theta} = \argmax_\theta \ln \left(\theta^{n_h} (1 - \theta)^{n_t}\right)$$

Our approach to computing the argmax is from calculus: we will take the derivative of the equation, and set it to 0. In a more rigorous setting, we'd check to make sure that we've actually found a local maximum, but we will skip that here.

$$\begin{aligned}
    \frac{\partial}{\partial \theta} \ln \left(\theta^{n_h} (1 - \theta)^{n_t}\right) &= 0 \\\\
    \frac{\partial}{\partial \theta} \left(\ln \theta^{n_h} + \ln (1 - \theta)^{n_t} \right) &= 0 \\\\
    \frac{\partial}{\partial \theta} \ln \theta^{n_h} + \frac{\partial}{\partial \theta} \ln (1 - \theta)^{n_t} &= 0 \\\\
    \frac{\partial}{\partial \theta} n_h \ln \theta + \frac{\partial}{\partial \theta} n_t \ln (1 - \theta) &= 0 \\\\
    \frac{n_h}{\theta} - \frac{n_t}{1 - \theta} &= 0 \\\\
    (1 - \theta)n_h - \theta n_t &= 0 \\\\
    n_h - \theta n_h - \theta n_t &= 0 \\\\
    \theta &= \frac{n_h}{n_h + n_t}
  \end{aligned}$$
  
This tells us that the best estimate for $\theta$ is to count the number of heads, and divide it by the total number of throws. This is called the *maximum likelihood estimate* (MLE).

## Continuous variables

What if, instead of predicting the outcome of a coin flip, we want to predict a continuous variable? For example, let's say we want to predict the temperature tomorrow. We are given a dataset of tomorrow's date from years past (e.g., May 1, 2001; May 1, 2002; May 1, 2003; etc.).

What should our model be? There are many ways to model this, but one way that will probably work well is the normal (a.k.a. Gaussian or "bell curve") distribution. The normal distribution assumes that the variable will most likely be close to the mean, $\mu$, and symmetrically spread out with some variance $\sigma^2$. The exact formula for the normal distribution is:

$$f(x) = \frac{1}{\sigma \sqrt{2\pi}} e^{-\frac{(x-\mu)^2}{2\sigma^2}}$$

There are 2 parameters to estimate: $\mu$ and $\sigma$.
