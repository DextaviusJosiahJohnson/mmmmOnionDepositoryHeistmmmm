<?php
include "classes/Account.php";
include "classes/Customer.php";

/* making accounts :) */
$accounts = [
    new Account("20625311", "Gambling", -20),
    new Account("80081355", "Gambling", 380),
    new Account("67676767", "Bitcoin if it was in 2014", 1250),
    new Account("67360420", "Kanin", 0)
];

/* the customer! */
$customer = new Customer("Rensough", "da lil cookiedough", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Westlock Holdings</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- yes yes im very good at banks i know how banks work yes yes (i do not know how banks work let alone where the nearest one is.) -->
<div class="bank-card">

    <img src="images/logo.png" alt="Bank Logo" class="logo">

    <h1 class="name"><?= $customer->getFullName(); ?></h1>

    <table>
        <thead>
            <tr>
                <th>ACCOUNT NUMBER</th>
                <th>ACCOUNT TYPE</th>
                <th>BALANCE</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($customer->getAccounts() as $account): ?>
            <tr>
                <td><?= $account->getAccountNumber(); ?></td>
                <td><?= $account->getAccountType(); ?></td>

                <?php if ($account->getBalance() >= 0): ?>
                    <td class="credit">₱ <?= number_format($account->getBalance(), 2); ?></td>
                <?php else: ?>
                    <td class="overdrawn">₱ <?= number_format($account->getBalance(), 2); ?></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>

</html>
