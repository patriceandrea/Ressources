const makeCase = function (input, cases) {
  //case: camel, pascal, snake, kebab, title 
  //other: vowel, consonnant 
  //upper, lower 
  let result = "";

  switch (cases) {
    case "camel":
      const string = input.replace(/^(.)|\s+(.)/g, c => c.toUpperCase()).replace(/\s+/g, '');
      result = string[0].toLowerCase() + string.slice(1);
      break;
    case "pascal":
      result = input.replace(/^(.)|\s+(.)/g, c => c.toUpperCase()).replace(/\s+/g, '');
      break;
    case "snake":
      result = input.split(" ").join('_');
      break;
    case "kebab":
      result = input.split(" ").join('-');
      break;
    case "title":
      result = input.replace(/\b./g, (c) => { return c.toUpperCase(); })
      break;
    case "vowel":
      result = input.toLowerCase().replace(/[aeiou]/g, (c) => { return c.toUpperCase(); });
      break;
    case "consonant":
      result = input.toLowerCase().replace(/[bcdfghjklmnpqrstvwxyz]/g, (l) => { return l.toUpperCase(); });
      break;
    case "upper":
      result = input.toUpperCase();
      break;
    case "lower":
      result = input.toLowerCase();
      break;
    default:
      result = input;
  }

  return result;
}


console.log(makeCase("this is a string", "camel"));
console.log(makeCase("this is a string", "pascal"));
console.log(makeCase("this is a string", "snake"));
console.log(makeCase("this is a string", "kebab"));
console.log(makeCase("this is a string", "title"));
console.log(makeCase("this is a string", "vowel"));
console.log(makeCase("this is a string", "consonant"));
console.log(makeCase("this is a string", "lower"));
// console.log(makeCase("this is a string", ["snake", "lower"]));
