<!DOCTYPE html> <html> <head>     <title>Account Transactions</title> </head> <body>     <h1>Account Transactions</h1>     <table>         <thead>             <tr>                 <th>Date</th>                 <th>Amount</th>             </tr>         </thead>         <tbody>             
@foreach
($transactions as $transaction)             <tr>                 <td>{{ $transaction->created_at }}</td>                 <td>{{ $transaction->amount }}</td>             </tr>             
@endforeach
        </tbody>     </table> </body> </html>