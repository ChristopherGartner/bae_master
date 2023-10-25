import {Authenticator} from './authorization/Authenticator.js';
import {Role} from './authorization/Role.js';
import {Right} from './authorization/Right.js';
import {Employee} from "./user/Employee.js";
import {hashString} from "./tools/StringManipulator.js";

const authenticator = new Authenticator();

const fooRole = new Role();
fooRole.id = 'fooRole';
const notExistingRole = new Role();
notExistingRole.id = 'notExistingRole';

const fooRight = new Right();
fooRight.id = 'fooRight';
const notExistingRight = new Right();
notExistingRight.id = 'notExistingRight';

const user = new Employee();
user.id = "FooUser";
user.roles = [fooRole]
user.rights = [fooRight];

console.log("Role: YES! \n" + authenticator.hasRole(user, fooRole));
console.log("Role: NO! \n" + authenticator.hasRole(user, notExistingRole));

console.log("Right: YES! \n" + authenticator.hasRight(user, fooRight));
console.log("Right: NO \n" + authenticator.hasRight(user, notExistingRight));

console.log("Hash-String-Test for word 'FooHaus': " + hashString('FooHaus'));
console.log("Hash-String-Test for word 'FooHaus': " + hashString('FooHaus'));