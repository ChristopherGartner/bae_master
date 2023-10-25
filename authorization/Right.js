import {INITIALIZED} from "../tools/Constants.js";

export {Right};
/**
 * Base class for rights
 */
class Right {
    #id = null;
    #name = INITIALIZED;
    #information = INITIALIZED;

    get id()
    {
        return this.#id;
    }

    get name()
    {
        return this.#name;
    }

    get information()
    {
        return this.#information;
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

    constructor(id)
    {
        this.#id = id;
    }
}