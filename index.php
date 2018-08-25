<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- body here is in EJS syntax passed from server -->
    <h1>Transfer Funds</h1>
    <%if(has_token == true){%>
    <form method="POST" action="/transfer" name="tranfer_form">
        <table>
            <tbody>
                <tr>
                    <td>Account No.</td>
                    <td>
                        <input type="number" value="" name="account_no">
                    </td>
                </tr>
                <tr>
                    <td>Amount to Transfer</td>
                    <td>
                        <input type="number" min="0" value="0" name="amount">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button>Transfer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <%}else{%>
        <a href='<%= redirect_link %>'>Login to Transfer</a>
    <%}%>
    <script src="/js/index.js" />
</body>
</html>