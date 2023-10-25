import {hashString} from "../tools/StringManipulator.js";

function hashPassword(inputPassword)
{
    return hashString(inputPassword);
}

function doesPasswordHashEqualNonHashedPassword(nonHashedPassword, hashedPassword)
{
    return hashString(nonHashedPassword) === hashedPassword;
}