import {INITIALIZED} from "../tools/Constants.js";

export {Role};

/**
 * Base data class for Roles
 */
class Role {
    #id = null;
    #name = INITIALIZED;
    #information = INITIALIZED;
    #rights = [];

    get id()
    {
        return this.#id
    }

    get name()
    {
        return this.#name;
    }

    get information()
    {
        return this.#information;
    }

    get rights()
    {
        return this.#rights;
    }

    set id(id)
    {
        this.#id = id;
    }

    set name(name)
    {
        this.#name = name;
    }

    set information(information)
    {
        this.#information = information;
    }

    set rights(rights)
    {
        this.#rights = rights;
    }
}