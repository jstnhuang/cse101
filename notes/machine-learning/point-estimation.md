---
title: Point estimation
layout: note
---

# Point estimation

We'll start by looking at a very simple model that has just one parameter. Because we're only trying to estimate the value of a single parameter, this is called *point estimation*.

## Example: coin flip

Suppose we have a potentially unfair coin, and we want to know what the likelihood of getting a heads or tails is. We'll call the probability of flipping heads $\theta$. We also have a dataset $D$ of 10 coin flips:

> H, T, H, T, T, H, H, T, T, T

### Model
In this case, our model will be the [binomial distribution](http://en.wikipedia.org/wiki/Binomial_distribution). This model assumes that each coin flip is *independent*, since each flip has no effect on any other flip. It also assumes that the probability $\theta$ of getting heads will be the same for each flip.

Because each flip is independent, the probability of the sequence of flips in $D$ is the product of the probability of each individual flip. So if we have $n_h$ heads and $n_t$ tails, the model gives the probability of our sequence of flips as:

$$
p(D \mid \theta) = \theta^{n_h} (1 - \theta)^{n_t}
$$

### Learning $\theta$

Our model has just one parameter, $\theta$. We want to find the value of $\theta$ that best explains (i.e., maximizes the probability of) $D$. Let's call our estimate $\hat{\theta}$:
$$
\begin{align}
  \hat{\theta} & = \argmax_\theta p(D \mid \theta) \\\\
    & = \argmax_\theta \theta^{n_h} (1 - \theta)^{n_t}
\end{align}
$$

For reasons that will become clear in a moment, we will actually find $\theta$ that maximizes the log probability $\ln p(D \mid \theta)$. This will make our equations simpler, and has no effect on the argmax:

$$
\hat{\theta} = \argmax_\theta \ln \left(\theta^{n_h} (1 - \theta)^{n_t}\right)
$$

Our approach to computing the argmax is from calculus: we will take the derivative of the equation, and set it to 0. In a more rigorous setting, we would check to make sure that we've actually found a local maximum, but we will skip that here.

$$
\begin{align}
  \frac{\partial}{\partial \theta} \ln \left(\theta^{n_h} (1 - \theta)^{n_t}\right) &= 0 \\\\
  \frac{\partial}{\partial \theta} \left(\ln \theta^{n_h} + \ln (1 - \theta)^{n_t} \right) &= 0 \\\\
  \frac{\partial}{\partial \theta} \ln \theta^{n_h} + \frac{\partial}{\partial \theta} \ln (1 - \theta)^{n_t} &= 0 \\\\
  \frac{\partial}{\partial \theta} n_h \ln \theta + \frac{\partial}{\partial \theta} n_t \ln (1 - \theta) &= 0 \\\\
  \frac{n_h}{\theta} - \frac{n_t}{1 - \theta} &= 0 \\\\
  (1 - \theta)n_h - \theta n_t &= 0 \\\\
  n_h - \theta n_h - \theta n_t &= 0 \\\\
  \theta = \frac{n_h}{n_h + n_t}
\end{align}
$$
  
This tells us that the best estimate for $\theta$ is to count the number of heads, and divide it by the total number of throws.

This method of estimating the parameters of our model by maximizing the likelihood of our data is called the *maximum likelihood estimate* (MLE).

## Sample complexity
The number of coin flips, $N$, we need to get a good estimate of $\theta$, is called the *sample complexity*. This is analogous to time complexity, which we use to measure how long an algorithm takes. Instead of measuring time, we are measuring the number of samples we need to get a good estimate.

One upper bound on the sample complexity is given by [Hoeffding's inequality](http://en.wikipedia.org/wiki/Hoeffding's_inequality). Let's say our estimate is $\hat{\theta}$ and the true probability of heads is $\theta^\*$. Hoeffding's inequality tells us that for some $\epsilon > 0$:

$$
p(\lvert\theta^\* - \hat{\theta}\rvert \ge \epsilon) \le 2 e^{-2 N \epsilon^2}
$$

This says that the probability that our estimate is off by more than $\epsilon$ decreases exponentially with respect to $N$, the number of coin flips we do. Let's rewrite this so that $\epsilon$ is an upper bound on our error, instead:
$$
\begin{align}
  -p(\lvert\theta^\* - \hat{\theta}\rvert \ge \epsilon) & \ge -2 e^{-2 N \epsilon^2}\\\\
  1-p(\lvert\theta^\* - \hat{\theta}\rvert \ge \epsilon) & \ge 1 - 2 e^{-2 N \epsilon^2}\\\\
  p(\lvert\theta^\* - \hat{\theta}\rvert \lt \epsilon) & \ge 1 - 2 e^{-2 N \epsilon^2}
\end{align}
$$

Let's call the probability $p$ for now. Solving for $N$:
    $$
      N \ge \frac{\ln(2) - \ln(1-p)}{2 \epsilon^2}
    $$

For example, if you'd like to be $p=0.95$ sure that your estimate of $\theta$ is within $\epsilon$ of $\theta^\*$, then you need to do $N$ = 184.4 flips. This is, however, a loose bound -- in practice, fewer flips may be needed to get a good estimate.

## Continuous variables

What if, instead of predicting the outcome of a coin flip, we want to predict a continuous variable? For example, let's say we want to predict the temperature tomorrow. We are given a dataset of tomorrow's date from years past (e.g., May 1, 2001; May 1, 2002; May 1, 2003; etc.).

What should our model be? There are many ways to model this, but one way that will probably work well is the normal (a.k.a. Gaussian or "bell curve") distribution. The normal distribution assumes that the variable will most likely be close to the mean, $\mu$, and symmetrically spread out with some variance $\sigma^2$. The exact formula for the normal distribution is:

$$f(x) = \frac{1}{\sigma \sqrt{2\pi}} e^{-\frac{(x-\mu)^2}{2\sigma^2}}$$

There are 2 parameters to estimate: $\mu$ and $\sigma$. $\mu$ is the *mean*, where the distribution is centered, and $\sigma$ is the *standard deviation*, which tells us how spread out the curve is.

## Learning $\mu$ and $\sigma$
Once again, we will learn $\mu$ and $\sigma$ using the maximum likelihood estimate. Given a data set of independent examples $X = \{x_1, x_2, \ldots, x_N\}$, we will first write out the log probability (aka *log likelihood*) of the data set. Then, to find the values of $\mu$ and $\sigma$ that maximize the log likelihood, we will take the partial derivatives with respect to each of those variables, and set them equal to 0.

First, the log likelihood of the data set:
$$
\begin{align}
  P(X \mid \mu, \sigma) &= \left(\frac{1}{\sigma \sqrt{2 \pi}}\right)^N \prod_{i=1}^N e^{\frac{-(x_i - \mu)^2}{2 \sigma^2}} \\\\
  \ln P(X \mid \mu, \sigma) &= \ln \left[\left(\frac{1}{\sigma \sqrt{2 \pi}}\right)^N \prod_{i=1}^N e^{\frac{-(x_i - \mu)^2}{2 \sigma^2}}\right] \\\\
    &= -N \ln(\sigma \sqrt{2 \pi}) + \sum_{i=1}^N \frac{-(x_i - \mu)^2}{2 \sigma^2}
\end{align}
$$

Setting the partial derivative of this with respect to $\mu$ and setting it equal to 0:
$$
\begin{align}
  \frac{\partial}{\partial \mu} \left[-N \ln(\sigma \sqrt{2 \pi}) + \sum_{i=1}^N \frac{-(x_i - \mu)^2}{2 \sigma^2}\right] &= \sum_{i=1}^N \frac{(x_i - \mu)}{\sigma^2} = 0 \\\\
  \sum_{i=1}^N (x_i - \mu) = 0 \\\\
  \sum_{i=1}^N x_i = N \mu \\\\
  \mu = \frac{1}{N} \sum_{i=1}^N x_i
\end{align}
$$

Unsurprisingly, this tells us that the MLE for $\mu$ should just be the average value of $X$.

Now, let's do the same for $\sigma$:

$$
\begin{align}
  \frac{\partial}{\partial \sigma} \left[-N \ln(\sigma \sqrt{2 \pi}) + \sum_{i=1}^N \frac{-(x_i - \mu)^2}{2 \sigma^2}\right] &= \frac{-N}{\sigma} + \sum_{i=1}^N \frac{(x_i - \mu)^2}{\sigma^3} = 0 \\\\
  \sum_{i=1}^N \frac{(x_i - \mu)^2}{\sigma^3} = \frac{N}{\sigma} \\\\
  \sigma^2 = \frac{1}{N} \sum_{i=1}^N (x_i - \mu)^2
\end{align}
$$

$\sigma^2$ is called the *variance*, which is sometimes used to define the Gaussian instead of $\sigma$. The MLE for $\sigma^2$ is the average sum of squared differences from the mean.
