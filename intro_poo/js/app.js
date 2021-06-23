// Introduction à la POO (OOP)

class Person {
  constructor(name, age, gender, country) {
    this.name = name;
    this.age = age;
    this.gender = gender;
    this.country = country;
  }

  getCountry() {
    return this.country;
  }

  getAge() {
    return this.age;
  }

  setCountry(newCountry) {
    this.country = newCountry;
  }

  sayHello() {
    return `Hello I'm ${this.name}, ${this.age} of age and I live in ${this.country}`;
  }
}

class Student extends Person {
  constructor(name, age, gender, country, course, level) {
    super(name, age, gender, country);
    this.course = course;
    this.level = level;
  }

  getProperty(property) {
    return this[property];
  }

  setProperty(property, value) {
    this[property] = value;
  }
}

const marius = new Student("Marius", 24, "male", "France", "Javascript", 3);

marius.setProperty("course", "Python");
// console.log(marius.getProperty("level"));

// console.log(marius.sayHello());
// marius.setCountry("Australia");
// console.log(marius.getCountry());

const john = new Person("John", 35, "male", "USA");
const jane = new Person("Jane", 28, "female", "UK");

// console.log(`${john.name} is ${john.age} and lives in ${john.country}`);
// console.log(`${jane.name} is ${jane.age} and lives in ${jane.country}`);

// jane.country = "Spain";
// console.log(`${jane.name} is ${jane.age} and lives in ${jane.country}`);

// console.log(jane.getCountry());
// jane.setCountry("Mexico");
// console.log(jane.getCountry());

// console.log(john.getCountry());

// console.log(jane.sayHello());

// const persons = [];

// for (let i = 0; i < 10; i++) {
//   const person = new Person(`name${i}`, 20 + i, "female", `country${i}`);
//   persons.push(person);
// }

// console.log(persons);

/////////////////////////////////////////////////////////

// comment passer des propriétés dynamiquement à un objet
var obj = {
  prop1: "propriété 1",
  prop2: "propriété 2",
  prop3: "propriété 3",
};

function getProp(prop) {
  return obj[prop];
  //   return obj.prop; retourne undefined car l'objet obj n'a pas de propriété prop
}

console.log(getProp("prop3"));
