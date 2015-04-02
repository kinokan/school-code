<?php
/*
Template Name: MBA
*/
?>
<?php get_header(); ?>
<?php
$school_name ="MBA";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">社会人を対象とした「オトナ留学」、実践ビジネス英語を学びたい方必見の語学学校！</h2>

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
						<li>社会人を対象とした日本人経営スクール</li>
						<li>海外ワーカー専門コースで働きながら語学力アップを目指すことが可能</li>
						<li>カリキュラムは「実務で使える」を目的とした実践的内容</li>
						<li>ビジネス英語を完全マスターしたい方に最適のプログラム</li>
						<li>宿泊施設は高級コンドミニアムの一人部屋を用意（ホテルのジムとプール付き）</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
『Master of Business English Academy (MBA）』は、「オトナ留学」を提供する2013年4月に開校した日本人経営の語学学校です。
					</p>
					<p class="detail">
MBAの「オトナ留学」とは、18歳以上の社会人または社会人経験者が海外留学を通して新たなキャリアアップために、語学・知識・スキルの習得や社会人同士のネットワークの構築が可能な留学プランを提供しています。カリキュラムはとても実践的な内容を用意しており、授業内容は実際のビジネスシーンで使われている場面を想定した構成となっています。月曜日から木曜日まではインプットを重視、金曜日はアウトプット重視で授業が行われ、学ぶのではなく「身につける」ことを目的とした内容の濃いビジネス英語プログラムです。
					</p>

					<p class="detail">
コース設定は3つあり、スクール形式コースでは、マンツーマンレッスンでスピーキング力を高め、グループレッスンでは各自プレゼンテーションを行い、より実践的な英語力を身につけることを目指していきます。プライベートコースでは、学生の学習目的やレベルに合わせて自分でカリキュラムをカスタマイズすることができます。また、英語の勉強をしながら仕事もしたいという社会人の方のための海外ワーカー専門コース設定もあります。午前中はマンツーマンレッスンで語学力アップ、午後は「AJITO」というコミュニケーション・ワークスペースで仕事をすることができます。
					</p>

					<p class="detail">
宿泊施設はセブの高級コンドミニアム型のホテルを採用しており、学生の部屋でマンツーマンレッスンが行われます。部屋に無料Wi-Fiもついており、フィリピン留学の語学学校の中では群を抜いて快適な生活環境が整っています。また、滞在先のホテルから徒歩5分程にある高級ホテル内のジム及びプールを利用することができます。"
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介（1コマ=50分）</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>コース</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>自習時間</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle">ビジネスマンツーマンコース</th>
				<td>５コマ</td>
				<td>２コマ</td>
				<td>１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">日常マンツーマンコース</th>
				<td class="active">５コマ</td>
				<td class="active">２コマ</td>
				<td class="active">１コマ</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white" id="t-middle" >TOEICコース</th>
				<td>４コマ</td>
				<td>-</td>
				<td>-</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue-light white" id="t-middle">ペアコース</th>
				<td class="active">５コマ</td>
				<td class="active">２コマ</td>
				<td class="active">１コマ</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスマンツーマンコース</h3>
					<p class="detail">
ビジネス英語を完全マスターすることを目指したコースです。
月曜日から木曜日はスピーキング力向上に重点を置くインプット重視の授業が行われ、金曜日にはディスカッションを行いアウトプット重視の授業が行われます。英語レベルによりスタンダードコース、アドバンスコース2つのコース設定があります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 日常マンツーマンコース</h3>
					<p class="detail">
日常会話力の向上に主眼を置いたコースです。
身近なテーマを取り上げ、日常生活で使える表現の幅を広げます。現時点では英語力に自信のない方や、トラベルイングリッシュの勉強を中心にされたい方も、こちらのコースがお勧めです。1日8コマのうち1コマは自習時間となります。自習時間は生徒様ごとに異なりますのでご了承ください。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> TOEICコース</h3>
					<p class="detail">
TOEICのスコアアップを目指す方のためのコースです。TOEIC試験用のリスニング・リーディングの学習や、文法の勉強をしていきます。卒業後、特にTOEICのスコアを重視される環境に身を置く方は、こちらのコースがお勧めです。1日8コマのうち1コマは自習時間となります。自習時間は生徒様ごとに異なりますのでご了承ください。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 海外ワーカーコース</h3>
					<p class="detail">
「仕事をしながら英語を勉強したい」という方のためのコースで、午前中はマンツーマンレッスンで語学力を向上させ、午後からはコワーキングスペース「AJITO」で仕事をすることができます。カリキュラムの内容は、スクール形式コースに準じたコースとなります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> コワーキングスペース『AJITO』とは</h3>
					<p class="detail">
AJITOは Asia Japan Interact Total Organization の略で、仕事や語学留学などでセブ島に滞在している全ての方が交流をもてるコミュニケーション・ワークスペースです。高速インターネット回線があるため、安心して仕事に集中することができます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> マンツーマンレッスンの概要</h3>
					<ul>
						<li class="bold">Speech Class</li>
						<p>日本人が苦手とするイントネーション(発音の抑揚)の練習を行い、ビジネス場面で使われる定型句をそっくりそのまま暗記していきます。</p>
						<li class="bold">Speaking Class A,B</li>
						<p>とにかく話し続け、英語を話す抵抗を取り除いていきながらビジネス知識も身につけていきます。</p>
						<li class="bold">Business English Class A,B</li>
						<p>約50以上のテーマから想定されるビジネスシーンを選択し、学習していきます。実践シーンを学びながら、適宜英単語、英文法、リーディング、ライティングも一緒に勉強していきます。</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> グループレッスンの概要</h3>
					<ul>
						<li class="bold">Listening Class</li>
						<p>CNNなどのニュースやビジネスシーンで使われている生の英語を教材として、リスニング力を高めていきます。</p>
						<li class="bold">Discussion Class</li>
						<p>自分の意見をまとめて英語で表現するトレーニングを行い、1チーム3人でディベート、ワークショップ等を行いながら、実践と同じような環境でトレーニングを行います。</p>
						<li class="bold">Presentation Class</li>
						<p>学生は毎週決められたテーマに沿ってプレゼンを作成し、発表を行います。</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 各種テストについて</h3>
					<ul>
						<li class="bold">レベルテスト</li>
						<p>全ての学生は、留学開始時と留学終了前に英語レベルテストを受験します。受験時間は約1時間で、筆記試験とインタビュー試験が行われます。またスクール形式コース受講者は、留学中に1回追加の英語レベルテストを受験することができます。</p>
						<li class="bold">フレーズテスト</li>
						<p>ビジネスシーンで必須となるフレーズを実際に使えるレベルまで覚えることができたかを確認するためのテストです。ビジネス英語独特の言い回しを繰り返し学ぶことで、スピーキング向上を目指します。</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ビジネスマンツーマンコース／日常マンツーマンコース／TOEICコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 海外ワーカーコース</h3>

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

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> ペアコース</h3>

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
82b Don Gil Garcia St., Capitol Site,Cebu city,Philippines
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
				<td colspan="3" class="active">30名 スタッフ5名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">40名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">学生休憩スペース、自習スペース、無線LANインターネットなど</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">全部屋１人部屋。</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
				ホットシャワー、トイレ、ベッド、ベッドテーブル、デスク、エアコン、<br />クローゼット、ケーブルテレビ、無線LANインターネット(ポケットWi-Fi無料貸し出し)、冷蔵庫、全身鏡、レストラン付き<br />
				※ジムとプールは、学生寮に隣接するホテル内の施設を無料で利用することが可能</td>
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