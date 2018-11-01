<h2><?= $title ?></h2>
<table class="table">
    <thead>
      <tr>
		<th>USD</th>
		<th>EUR</th>
        <th>Time</th>
      </tr>
    </thead>
    <tbody>
		<?php  
			foreach($currencies as $currency){
				echo 
				'<tr>
					<td>' . $currency['usd_buy'] . '/' . $currency['usd_sale'] . '</td>
					<td>' . $currency['eur_buy'] . '/' . $currency['eur_sale'] . '</td>
					<td>' . $currency['created_at'] . '</td>
				</tr>';
			}
		?>
    </tbody>
  </table>
