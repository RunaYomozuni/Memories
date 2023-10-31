<?php require_once '../../utils/common.php';
    ?>
<!DOCTYPE html>
<html lang="fr">
<?php
        require_once SITE_ROOT.'partials/head.php';
    ?>

	<body id="jeu">
    <?php
        require_once SITE_ROOT. 'partials/header.php';
    ?>

		<main>
			<div id="timer"></div>
			<button id="play">Jouer</button>
			<div class="blur">
			<table id="gameBox">
				<tbody>
				<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
				<tr>
				<td>6</td>
				<td>7</td>
				<td>8</td>
				<td>9</td>
				<td>10</td>
			</tr>
				<tr>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
				<td>15</td>
			</tr>
				<tr>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
			</tr>
				<tr>
				<td>21</td>
				<td>22</td>
				<td>23</td>
				<td>24</td>
				<td>25</td>
			</tr>
			<tr>
				<td>26</td>
				<td>27</td>
				<td>28</td>
				<td>29</td>
				<td>30</td>
			</tr>
			<tr>
				<td>31</td>
				<td>32</td>
				<td>33</td>
				<td>34</td>
				<td>35</td>
			</tr>
			<tr>
				<td>36</td>
				<td>37</td>
				<td>38</td>
				<td>39</td>
				<td>40</td>
			</tr>
			<tr>
				<td>41</td>
				<td>42</td>
				<td>43</td>
				<td>44</td>
				<td>45</td>
			</tr>
			<tr>
				<td>46</td>
				<td>47</td>
				<td>48</td>
				<td>49</td>
				<td>50</td>
			</tr>
		</tbody>
			</table>
		</div>
		</main>

		<?php
        require_once SITE_ROOT. 'partials/footer.php';
    ?>
	<script src="<?= PROJECT_FOLDER ?>assets/js/script.js"></script>
	</body>
</html>