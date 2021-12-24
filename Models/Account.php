<?php
class Account
{
    public int $AccountId;
    public  int $ID;
    public string $Username;
    public string $fName;
    public string $mName;
    public string $lName;
    public string $PasswordHash;
    public string $EmailAddress;
    public string $Gender;
    public string $BirthDate;
    public int $Status;
    public string $Country;
    public int $Balance;
    public string $AccountType; //0 for seller 1 for buyer
    public string $ContactEmail;
    public int $Strikes;
}
