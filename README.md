<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to make your own Artisan script example project.

<br>

## Installation

0. Checkout branch

```bash
git clone https://github.com/capsulescodes/articles.git

cd articles

git checkout 001-make-your-own-artisan
```

<br>

1. Install dependencies

```bash
commposer install

npm install
```

<br>

2. Try is-dead command

```bash
php is-dead inspire
```


<br>

3. Try IsDead facade

```bash
php is-dead tinker
```
```php
IsDead::call( 'inspire' );
```
