

<p align="center"><img src="https://github.com/capsulescodes/articles/blob/main/capsules-articles-image.png" width="300px" height="200px" /></p>


## About

How to make a custom 502 Bad Gateway page example project.


## Installation

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

brew services stop php@8.1
```
