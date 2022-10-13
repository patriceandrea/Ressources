'use strict';

const string = process.argv.slice(2).toString();

let result = []

for (let i = string.length - 1; i >= 0; i--) {
  result += string[i]

}

console.log(result);

