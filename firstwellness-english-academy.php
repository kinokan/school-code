<?php
/*
Template Name: Firstwellness English Academy
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Firstwellness English Academy";
?>
			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">綺麗なホテルでリラックスできる環境をご用意しました！留学生の平均年令が高めの学校です。</h2>

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
						<li>ホテルクオリティの施設で綺麗な生活環境をご用意</li>
						<li>日本人経営で、安心、安全、ハイクオリティを追求</li>
						<li>講師は5年以上の経験、もしくは、英語教授修士号取得者</li>
						<li>定期的なメディカルチェックで健康面もサポート</li>
						<li>１日６時間の充実のマンツーマン授業数をご用意</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
Firstwellness English Academy（FEA）は日本人経営のスクールで、安心、安全なサービスを提供することを目的に作られた学校です。
					</p>
					<p class="detail">
全ての講師が5年以上の経験、もしくは英語教授修士号取得者で経験豊富なことから、より集中しながら質の高い英語を習得できることも特徴です。また、宿泊部屋と勉強部屋が同じホテル内に有るので利便性が高く、治安面でも安心です。
					</p>
					<p class="detail">
マンツーマンレッスンは1日6時間を確保しており、セブの学校の中では最大のマンツーマンレッスン数を誇っております。授業内容に重点を置いた学校運営を目指しており、セブの他校に比べて授業内容に特に気を使っております。
					</p>
					<p class="detail">
また、『University of San Jose-Recoletos』でMBAコース取得と併用可能となっています。短期間で最大の成果を伸ばしたい方、また治安面で不安な方には最適な環境をFEAはご用意しております。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="course" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">02</span><?php echo $school_name; ?>のコース紹介</h2>

<div class="table-responsive">
	<table class="table">
		<thead class="t-head">
			<tr>
				<th>プログラム</th>
				<th>マンツーマン</th>
				<th>グループ</th>
				<th>対象レベル</th>
			</tr>
		</thead>

		<tbody>

			<tr class="">
				<th scope="row" class="bg-skyblue white">一般英語コース</th>
				<td>６コマ</td>
				<td>２コマ</td>
				<td>初級〜全レベル</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> カリキュラム概要</h3>
					<p class="detail">
会話、文法、発音、TOEIC対策等さまざまなカリキュラムを最高レベルの大学教授が作成してご用意しております。
また、レッスンでは実際の生活や会話で使う実践的な英語をメインとして学んでいただけます。講師歴5年以上もしくは英語教授修士号取得者の講師が授業を担当致します。</p>
					<p class="detail">
※授業は強制ではありませんので、全ての授業に参加されなくても問題はありません。
※金曜日のPMレッスンはありません。（医師のメディカルチェックを受けていただけます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語入門者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>シンプルな文章、単語、表現のリスニングを出来るようにします</p>
						<li class="bold">Speaking</li>
						<p>シンプルな文章、単語、表現で自身の考えを話せるようにします</p>
						<li class="bold">Reading</li>
						<p>数字や人や動物等のシンプルな単語や表現を読めるようにします</p>
						<li class="bold">Writing </li>
						<p>現在形の文章でシンプルな文章や表現を書けるようにします</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語入門者〜初心者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>よく使う表現や文章のリスニングを出来るようにします</p>
						<li class="bold">Speaking</li>
						<p>一般的な会話で使うシンプルな文章を話せるようにします</p>
						<li class="bold">Reading</li>
						<p>シンプルな説明文を読めるようにします</p>
						<li class="bold">Writing </li>
						<p>挨拶や紹介文をしっかりと書けるようにします</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語初心者〜中級者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>一般的な会話の内容は理解できるようにします</p>
						<li class="bold">Speaking</li>
						<p>一般的な要望や質問が出来るようにします</p>
						<li class="bold">Reading</li>
						<p>道の案内や方向の指示を読めるレベルにします</p>
						<li class="bold">Writing </li>
						<p>現在形、過去形、未来形の文章を書けるようにします</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語中級者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>場所、人、時、方向、規則等の明確な情報を聞きとれるようにします</p>
						<li class="bold">Speaking</li>
						<p>確認、質問、電話での対応、物事の明確化を出来るようにします</p>
						<li class="bold">Reading</li>
						<p>文章の中で要点がどこにあるかを見つけられるようにします</p>
						<li class="bold">Writing </li>
						<p>長めの文章で手紙を書けるレベルにします</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語中級者〜上級者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>聞き返す事がほとんどないリスニングレベルにします</p>
						<li class="bold">Speaking</li>
						<p>理由づけ、情報の詳細の伝達等の難しめの内容も話せるようにします</p>
						<li class="bold">Reading</li>
						<p>理解出来ない単語でも、文章の前後の内容から予測出来るレベルにします</p>
						<li class="bold">Writing </li>
						<p>ビジネスレターや短めの報告文書を書けるようにします</p>
					</ul>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> 英語上級者用カリキュラム</h3>
					<ul>
						<li class="bold">Listening</li>
						<p>通常のスピードでの会話を完全に聞きとれるレベルにします</p>
						<li class="bold">Speaking</li>
						<p>発音や文法に気を付けながら多様な話題を人の前で話せるようにします</p>
						<li class="bold">Reading</li>
						<p>難しい長い文章でも適切に要約が出来るレベルにします</p>
						<li class="bold">Writing </li>
						<p>多様な表現で適切な単語を使い、公式的な文章を書けるようにします</p>
					</ul>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> コース費用 （全コース共通）</h3>

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
Verbena Capitol Suites, 79 Don Gil Garcia St, Capitol Site, Cebu City, 6000 Philippines
				</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">セブ・マクタン空港より車で約40分。</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2012年4月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">20名 スタッフ10名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">30名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">90％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">食堂、売店、学生ラウンジ、自習室、など</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">学校寮・・・1人部屋、２人部屋、３人部屋</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、エアコン、温水シャワー、机、イス、冷蔵庫、など
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