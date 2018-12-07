var AccountDetails = [{
    AccountTitle: 'sami ur rehman',
    AvailableBalance:400000,
    AccountCurrency:'$',
    IBAN:"USA45643265453"
}

];
var currentUser = 0;
var title = document.getElementById('title');
var balance = document.getElementById('balance');
var currency = document.getElementById('currency');
var IBAN_Num = document.getElementById('IBAN');
title.innerHTML = AccountDetails[currentUser].AccountTitle;
balance.innerHTML = AccountDetails[currentUser].AvailableBalance;
currency.innerHTML = AccountDetails[currentUser].AccountCurrency;
IBAN_Num.innerHTML = AccountDetails[currentUser].IBAN;

function deposit_amount (){
    var acc=document.getElementById("deposit amount");

    if (event.keycode=13)
        AccountDetails.balance=AccountDetails.balance +parseInt(document.getElementById("depsoit").value);
    document.getElementById("balance").innerHTML=AccountDetails.balance;


}

function withdraw_amount (){
    var acc=document.getElementById("deposit amount");

    if (event.keycode=13)
        AccountDetails.balance=AccountDetails.balance +parseInt(document.getElementById("withdraw_amount").value);
    document.getElementById("balance").innerHTML=AccountDetails.balance;


}
