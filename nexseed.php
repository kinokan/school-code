<?php
/*
Template Name: Nexseed
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Nexseed";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">プログラミング留学で有名なNexseed。海外で活躍できるグローバルエンジニアを目指す方に最適な語学学校！</h2>

			<!-- サムネイルの表示 -->
			<?php get_template_part( 'thumbnail' ); ?>

			<!-- キャンペーン用のスペース -->
			<?php get_template_part( 'campaign-space' ); ?>

			<!-- メタデータの読み込み -->
			<?php get_template_part( 'meta' ); ?>

			<section class="bg-gray padding20 sp-no-padding">
				<article class="bg-white padding10"  itemprop="articleBody">

					<!-- 学校ナビボタン -->
					<?php get_template_part( 'button/school-detail-jump-button' ); ?>

					<h2 class="top30 point"><i class="fa fa-check-circle"></i> <?php echo $school_name; ?>の５つの要点まとめ</h2>
					<ol class="point-list">
						<li>英会話からプログラミングまで学べるコース設定</li>
						<li>スピーキング強化のためアウトプット中心のカリキュラム</li>
						<li>ショッピングモールまで徒歩5分圏内の好立地条件</li>
						<li>門限のない自由な校風でストレスなく勉強できる環境</li>
						<li>マンツーマン授業特化でグループクラスのないカリキュラム</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
NexSeed English School（ネクシード）は、2013年に開校したセブにある語学学校です。海外で活躍できるグローバルな人材育成を目的として作られた学校で、日本人が苦手とするスピーキング力の強化に力を入れており、授業は全てマンツーマンスタイルで行います。マンツーマン授業で重点的に学ぶことにより、少しでも英語を発する時間を増やすことができます。授業の中でインプットの作業は一切なく、インプットは宿題や自習で行い、そしてインプットした内容を授業でアウトプットする手順を重視したカリキュラム体制を取っています。
					</p>
					<p class="detail">
ネクシードのコースは、スタンダードコース（マンツーマン授業6コマ）とインテンシブコース（マンツーマン授業7コマ）の2種類からなる英会話留学コース、iOS（iPhoneアプリ開発）コースとWeb（Webアプリ開発）コースの2種類からなるエンジニア留学コースが用意されています。フィリピン留学では珍しい、プログラミングが学べるエンジニア留学コースは大変人気です。当校では、ただ英語が話せるというだけではなく、グローバルなビジネスで活躍できるほどのスキルを持った人材の育成を目的としています。
					</p>

					<p class="detail">
当校は門限などの厳しいルールはなく、自由な校風であるのも特徴の一つです。食事も学校が用意したものを学校内で食べるのではなく、各自好きなものを外で食べることで英語を使う練習や異文化理解を深めることも可能となっています。その他にも週1回実施されている現地体験（Experience）では、現地フィリピン人との交流を持つことができます。英語に学習効果を上げるのはもちろんのこと、グローバルな環境でも活躍できる人材作りへと繋がる貴重な海外経験ができること間違いなしでしょう。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介（1コマ=50分）</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>プログラム</th>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>プログラミング授業</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" rowspan="2">マンツーマン英会話留学</th>
				<td>スタンダードコース</td>
				<td>６時間</td>
				<td>-</td>
			</tr>

			<tr class="">
				<td>インテンシブコース</td>
				<td>７時間</td>
				<td>-</td>
			</tr>


			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle" rowspan="2">エンジニア留学</th>
				<td class="active">iOSコース（iPhoneアプリ開発）</td>
				<td class="active">３時間</td>
				<td class="active">３時間</td>
			</tr>

			<tr class="">
				<td class="active">Webコース（Webアプリ開発）</td>
				<td class="active">３時間</td>
				<td class="active">３時間</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマン英会話留学</h3>
					<p class="detail">
マンツーマン英会話留学のコースでは、日本人特有の「話すのが苦手」という弱点に焦点を当てたスピーキングに特化したカリキュラムとなっています。しっかりとアウトプットができるよう授業は全てマンツーマン授業となっており、学生1人1人のレベルに応じた内容で授業は進められていきます。レストランや病院、旅行先などで本当に使える日常会話、ミーティングや電話対応の際に必要なビジネス英語など、実際に起こるシチュエーションを想定して学習そして実践していきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> エンジニア留学</h3>
					<p class="detail">
エンジニア留学のコースは、最短7週間、通常12週間、長期24週間から選択可能となっています。7週間コースでは、基礎を学習していきます。12週間コースでは、アプリを作成して世の中に商品を出すまでの過程、さらにはプログラミングやログインの仕組み、デザインについても学びます。プログラミングの授業は日本語で行われ、そして日常会話や基礎的な英語スキルはマンツーマン授業でしっかり勉強していきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 現地体験（Experience）</h3>
					<p class="detail">
マンツーマン英会話留学コースの特別課外授業として、毎週水曜日の午後に行われています。現地の企業訪問や大学生との交流、教会や美術館巡りなどを通じて現地フィリピン人と触れ合う機会を提供しています。海外就職を考えている方や、海外ボランティアに興味のある方にとっては貴重な体験となります。また、学校内で英語を学習するだけではなく、実際に英語を使うことでより高い学習効果がみられるのも当校の魅力の1つです。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマンレッスンの概要</h3>
					<ul>
						<li class="bold">Open Mind / Express Ways（超実践的日常英会話）</li>
						<p>日常生活で実践的に使える英語をひたすら使用し、たくさん話す機会を作ることで、日本人の多くが抱いている英語を話すことへの恐怖心を払拭していくことに重点を置いた授業です。</p>
						<li class="bold">Business English（実践的ビジネス英会話）</li>
						<p>ビジネスシーンでの電話対応、ミーティングの際に必要な英会話などよく使う表現を、業界に捉われず学習します。</p>
						<li class="bold">Pronunciation</li>
						<p>相手にきちんと言いたいことを伝えるために必要な正しい発音の仕方を学習していきます。発音矯正をすることで、話すことへの自信へも繋がります。</p>
						<li class="bold">Critical Listening</li>
						<p>会話をするには、相手が何を言っているのかをしっかりと理解することも大変重要になります。よりしっかりと各場面に対応できる英語耳を鍛え、制度の高いリスニング力を鍛えます。</p>
						<li class="bold">Interactive English</li>
						<p>自分の身の回りのことから、少し上級の社会問題や最近のニュースなど、各テーマに応じて英語で討論していきます。</p>
						<li class="bold">Public Speaking</li>
						<p>中級レベル以上になると、日本人が苦手とする英語を人前で話すということにチャレンジしていきます。実際に人前で話す機会を想定して、スピーキング力をしっかりと伸ばしていきます。</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 1日6時間コース（スタンダードコース / エンジニア留学）</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 1日7時間コース（インテンシブコース）</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>４週間</td>
				<td>８週間</td>
				<td>１２週間</td>
				<td>１６週間</td>
				<td>２４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="active">
				<td>２人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>

			<tr class="">
				<td>３人部屋</td>
				<td>74,000</td>
				<td>96,000</td>
				<td>157,000</td>
				<td>309,000</td>
				<td>461,000</td>
				<td>613,000</td>
				<td>917,000</td>
			</tr>
		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="picture" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">05</span><?php echo $school_name; ?>の学校写真</h2>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/" alt="image alt" class="img-responsive max-width" />
					</a>

					<div style="clear: both;" class="top30"></div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="data" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">06</span><?php echo $school_name; ?>の学校データ</h2>

<div class="table-responsive">

	<table class="table">
		<tbody>
			<tr class="">
				<th scope="row" class="bg-skyblue white">住所</th>
				<td colspan="3">
Unit A, 12th Floor, 2Quad Building Cardinal Rosales Ave, Cebu City, Cebu, Philippines 6000
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港より車で約30分。</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2013年</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">35名 スタッフ5名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">80名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">自習室、ミーティングルーム、ウォーターサーバー、共有スペース、マンツーマン授業ステーション、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
				ベッド、椅子、机、エアコン、クローゼット、トイレ、シャワー、ウォーターサーバー、ベランダ、プール（有料）、など
				</td>
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本語スタッフ</th>
				<td colspan="3" class="active">あり</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">SSP</th>
				<td class="active">取得済み</td>
				<th class="bg-skyblue white">TESDA</th>
				<td class="active">取得済み</td>
			</tr>
		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>
					<?php get_template_part( 'button/search-more' ); ?>


				</article>
			</section>

			</div> <!-- /main col-9 -->

			<?php get_sidebar(); ?>

		</div> <!-- /main row -->
	</main>
</div>

<?php get_footer(); ?>