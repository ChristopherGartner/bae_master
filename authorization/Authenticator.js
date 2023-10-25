export {Authenticator};
import {Employee} from "../user/Employee.js";
import {Right} from "./Right.js";
import {Role} from "./Role.js";

/**
 * Class used for managing rights
 */
class Authenticator {

    /**
     *
     * @param {Employee} user
     * @param {Right} right
     * @returns {boolean}
     */
    hasRight(user, right)
    {
        for(let i = 0; i < user.rights.length; i++) {
            let userRight = user.rights[i];

            if(userRight.id === right.id) {
                return true;
            }
        }
        return false;
    }

    /**
     *
     * @param {Employee} user
     * @param {Role} role
     * @returns {boolean}
     */
    hasRole(user, role)
    {
        for(let i = 0; i < user.roles.length; i++) {
            let userRole = user.roles[i];

            if(userRole.id === role.id) {
                return true;
            }
        }
        return false;
    }

    /**
     *
     * @param {Role} role
     * @param {Right} right
     * @returns {boolean}
     */
    roleHasRight(role, right)
    {
        for(let i = 0; i < role.rights.length; i++) {
            let roleRight = role.rights[i];

            if(role.id === roleRight.id) {
                return true;
            }
        }
        return false;
    }


}