<p align="center"><img src="https://raw.githubusercontent.com/capsulescodes/articles/main/art/capsules-articles-image.svg" width="300px" height="200px" /></p>


## About

How to make a custom 502 Bad Gateway page example project.

<br>

## Installation

0. Checkout branch

```bash
git checkout 002-make-a-custom-502-page
```

<br>

1. Install dependencies

```bash
commposer install

npm install
```

<br>

2. Modify Valet Configuration

```bash
error_page 502 /502.html;

location = /502.html {
    root /path/to/your/project/public/folder/where/the/file/is;
    internal;
}
```

- Valet config file path : `/opt/homebrew/etc/nginx/valet/valet.conf`.
- Add these lines to the bottom of the server object.
- This is only for testing purpose. Don't forget to remove these lines afterwards.

<br>

3. Stop PHP Service

```bash
valet restart

brew services stop php@8.2
```
