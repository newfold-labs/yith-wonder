Wonder
===

**Wonder** is the new block and full site editing theme by YITH.

Installation & Development
---------------

### Requirements

`Wonder` requires the following dependencies:

- [Node.js](https://nodejs.org/)

### Setup

To start using all the tools that come with `Wonder`  you need to install the necessary Node.js dependencies :

```sh
$ npm install
```


### Available CLI commands

`Wonder` comes packed with CLI commands tailored for theme development :

- `grunt watch` : starts a watcher for your .scss files and compilate them to .css when saved.
- `grunt css` : compiles .scss files into .css file and minimize them. Map files are added for the main .css files to help you debug and navigate the source .scss files.
- `grunt dist` : compiles .scss files into .css file and minimie them. No .css sourcemap added. Use this prior to create a bundle package using the next `npm run bundle` command.
- `npm run bundle` : generates a .zip archive for distribution, excluding development and system files.

### Windows users note

If you run into problems while using grunt tasks, it may be necessary to do, only the first time, the following:

- open the Git Bash console with Administrative permissions
- `npm install -g sass`
- `npm install -g grunt-cli`