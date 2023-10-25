import {INITIALIZED} from "../tools/Constants.js";

export {Employee};

/**
 * Base data class for employees
 */
class Employee
{
    #id = null;
    #firstName = INITIALIZED;
    #lastName = INITIALIZED;
    #gender = null;
    #position = INITIALIZED;
    #salaryPerHour = null;
    #title = INITIALIZED;
    #birthDate = null;
    #information = INITIALIZED;
    #address = null;

    #rights = [];
    #roles = [];

    get id()
    {
        return this.#id;
    }

    get firstName()
    {
        return this.#firstName;
    }

    get lastName()
    {
        return this.#lastName;
    }

    get gender()
    {
        return this.#gender;
    }

    get position()
    {
        return this.#position;
    }

    get salaryPerHour()
    {
        return this.#salaryPerHour;
    }

    get title()
    {
        return this.#title;
    }

    get birthDate()
    {
        return this.#birthDate;
    }

    get information()
    {
        return this.#information;
    }

    get address()
    {
        return this.#address;
    }

    get rights()
    {
        return this.#rights;
    }

    get roles()
    {
        return this.#roles;
    }

    set id(id)
    {
        this.#id = id;
    }

    set firstName(firstName)
    {
        this.#firstName = firstName;
    }

    set lastName(lastName)
    {
        this.#lastName = lastName;
    }

    set gender(gender)
    {
        this.#gender = gender;
    }

    set position(position)
    {
        this.#position = position;
    }

    set salaryPerHour(salaryPerHour)
    {
        this.#salaryPerHour = salaryPerHour;
    }

    set title(title)
    {
        this.#title = title;
    }

    set birthDate(birthDate)
    {
        this.#birthDate = birthDate;
    }

    set information(information)
    {
        this.#information = information;
    }

    set address(address)
    {
        this.#address = address;
    }

    set rights(rights)
    {
        this.#rights = rights;
    }

    set roles(groups)
    {
        this.#roles = groups;
    }
}