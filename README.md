

<p align="center"><img src="capsules-articles-image.png" width="300px" height="200px" /></p>

## About Capsules Articles

Here are stored the framework projects examples linked with <a href="https://capsules.codes/en/blog">Capsules articles</a>.
Inviting readers to try out the articles content by themselves.

## Installation

1. Clone the selected article repository on your local environment

```bash
git clone --filter=blob:none --no-checkout https://github.com/capsulescodes/articles.git

cd articles

git sparse-checkout set --no-cone {article-name}

git fetch origin

git checkout main

cd ../

mv articles/{article-name} ./{article-name}

rm -rf articles
```

2. Install dependencies

```bash
commposer install

npm install
```

3. Build and Try out

```bash
valet link {article-name}.test

npm run dev
```
