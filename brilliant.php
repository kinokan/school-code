<?php
/*
Template Name: Brilliant Cebu
*/
?>
<?php get_header(); ?>
<?php
$school_name ="Brilliant Cebu";
?>

			<!-- パンくずリスト -->
			<?php get_template_part( 'breadcrumb-page' ); ?>

			<div class="col-sm-9 sp-padding10"> <!-- main col-9 -->

			<h1 class="detail"  itemprop="name headline">
				<a href="<?php the_permalink(); ?>" title="<?php printf(the_title_attribute('echo=0') ); ?>" itemprop="url"><?php echo $school_name; ?>（セブ島）の学校情報</a>
			</h1>

			<h2 id="balloon-2-bottom">安心・快適に過ごせるフィリピントップの設備を完備、満足度の高い日本資本の新規校！！</h2>

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
						<li>2013年4月開校の日本式サービスを提供する新規校。</li>
						<li>セブNo.1を誇る校舎・寮は優雅に生活できるコンドミニアム型。</li>
						<li>門限の設定が無く、自分の生活スタイルで過ごすことが可能。</li>
						<li>マンツーマン授業数は1日5時間以上と、時間の限られた学生に嬉しい集中学習型。</li>
						<li>ビジネスマンにも最適の1人部屋を多く完備。</li>
						<li>部屋にはキッチンが付いているため自炊も可能。</li>
					</ol>

					<h2 id="feature" class="detail-h2 detail-h2-sp top30"><span id="number" class="spnone">01</span><?php echo $school_name; ?>の特徴</h2>
					<p class="detail">
					『BRILLIANT CEBU ENGLISH ACADEMY』は、2013年4月にセブに新しく開校した日本資本の語学学校です。
					</p>

					<p class="detail">
					この学校の最大の魅力は、最新設備の整った最高級コンドミニアムを学生寮として利用することができる部分です。同じ建物内に学習施設、学生宿舎、食堂、スポーツジムが全て揃っているので、生活に便利な環境が整っています。部屋にはキッチンも付いており、自炊をしたい方にも最適です。(キッチン用品はレンタル)
					</p>
					<p class="detail">
					食事面に関しては、プロのシェフが平日の3食、土日の朝食を提供し、日本食レストランと提携している為、セブに居ながら手軽に日本食を食べることもできます。
					</p>
					<p class="detail">
					カリキュラム面では、一般英語コース、集中英語コース、ビジネス英語コース、試験対策コース、と４つの幅広いコースを用意しております。各コース共に1日5時間以上のマンツーマン授業を受講できる為、時間の限られた学生にも最適な学習環境を用意しております。また、当校はスピーキングに特化した内容の授業を行っている為、短期間で最大限の効果が得ることができる、各学生のニーズに適した質の高いレッスンを提供しております。
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
				<th scope="row" class="bg-skyblue white">General Englishコース</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Intensive Englishコース</th>
				<td>７時間</td>
				<td>-</td>
				<td>初級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Business Englishコース</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Exam Englishコース（IELTS,TOEFL,TOEIC）</th>
				<td>６時間</td>
				<td>２時間</td>
				<td>中級〜全レベル</td>
			</tr>

			<tr class="">
				<th scope="row" class="bg-skyblue white">Travel Englishコース</th>
				<td>３時間</td>
				<td>１時間</td>
				<td>初級〜全レベル</td>
			</tr>

		</tbody>
	</table>
</div>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="class" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">03</span><?php echo $school_name; ?>のカリキュラム</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> General Englishコース</h3>
					<p class="detail">
General Englishコースは日常のいろいろな状況において正確に話せる英語力を育成します。特に、日常会話のシーンを想定して、スピーキング・リーディング・リスニング・ライティングを集中的に学び、新しい語彙を増やしていきます。<br />
※全レベルの生徒様に適したプログラムととなります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensive Englishコース</h3>
					<p class="detail">
集中英語コースは、全ての授業がマンツーマン授業となっております。時間のない方での、短期間で集中的に英語のスキルを伸ばすことができます。<br />
日常会話のシーンを想定して正確な対応が出来る能力を伸ばすと同時に、文法や語彙を学び、日常会話では困らない英語力をつけていきます。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Business Englishコース</h3>
					<p class="detail">
ビジネス英語コースは、生徒様のニーズに合わせたビジネスシーンに合わせてカリキュラムを組んでいきます。<br />
授業を通して、海外のビジネスシーンにおいて必要なスキル（ミーティング、ビジネスレポート、プレゼンテーションなど）を学んでいきます。<br />
加えて、ビジネスシーンでは日常会話でも困らない英語力も必須であるため、日常会話の英語力も育成します。<br />
※ある程度の語学力がある方に適したプログラムとなります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Exam Englishコース（IELTS,TOEFL,TOEIC）</h3>
					<p class="detail">
英語試験コースは、各試験（IELTS/TOEFL/TOEIC）対策を重点的に学習します。<br />
各試験で必要な項目（リーディング・ライティング・リスニング・スピーキング）を学び、ハイスコアを取得を目指します。
さらに、担当講師が生徒様のレベルに合わせたカリキュラムを作成いたします。<br />
※ある程度の語学力がある方に適したプログラムとなります。
					</p>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Travel Englishコース</h3>
					<p class="detail">
海外旅行で使用する英語学習に特化したコースです。<br />
他のコースよりも、ゆったりと学習したい方にオススメのコースとなります。<br />
受講可能期間は、最長4週までとなります。また、食事も朝食のみで、授業が午前中で終了します。
					</p>

					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="price" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">04</span><?php echo $school_name; ?>の料金表</h2>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> General Englishコース</h3>

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
				<td>１人部屋ST</td>
				<td>$810</td>
				<td>$1,450</td>
				<td>$2,250</td>
				<td>$4,500</td>
				<td>$6,750</td>
				<td>$9,000</td>
				<td>$13,500</td>
			</tr>

			<tr class="active">
				<td>１人部屋DX</td>
				<td>$860</td>
				<td>$1,550</td>
				<td>$2,450</td>
				<td>$4,900</td>
				<td>$7,350</td>
				<td>$9,800</td>
				<td>$14,700</td>
			</tr>

			<tr class="">
				<td>１人部屋SU</td>
				<td>$890</td>
				<td>$1,610</td>
				<td>$2,570</td>
				<td>$5,140</td>
				<td>$7,710</td>
				<td>$10,280</td>
				<td>$15,420</td>
			</tr>

			<tr class="active">
				<td>２人部屋ST</td>
				<td>$710</td>
				<td>$1,250</td>
				<td>$1,850</td>
				<td>$3,700</td>
				<td>$5,550</td>
				<td>$7,400</td>
				<td>$11,100</td>
			</tr>
			
			<tr class="">
				<td>２人部屋DX</td>
				<td>$760</td>
				<td>$1,350</td>
				<td>$2,050</td>
				<td>$4,100</td>
				<td>$6,150</td>
				<td>$8,200</td>
				<td>$12,300</td>
			</tr>
			
			<tr class="active">
				<td>２人部屋SU</td>
				<td>$790</td>
				<td>$1,410</td>
				<td>$2,170</td>
				<td>$4,340</td>
				<td>$6,510</td>
				<td>$8,680</td>
				<td>$13,020</td>
			</tr>
			
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Intensive Englishコース</h3>

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
				<td>１人部屋ST</td>
				<td>$830</td>
				<td>$1,490</td>
				<td>$2,330</td>
				<td>$4,660</td>
				<td>$6,990</td>
				<td>$9,320</td>
				<td>$13,980</td>
			</tr>

			<tr class="active">
				<td>１人部屋DX</td>
				<td>$880</td>
				<td>$1,590</td>
				<td>$2,530</td>
				<td>$5,060</td>
				<td>$7,590</td>
				<td>$10,120</td>
				<td>$15,180</td>
			</tr>

			<tr class="">
				<td>１人部屋SU</td>
				<td>$910</td>
				<td>$1,650</td>
				<td>$2,650</td>
				<td>$5,300</td>
				<td>$7,950</td>
				<td>$10,600</td>
				<td>$15,900</td>
			</tr>

			<tr class="active">
				<td>２人部屋ST</td>
				<td>$730</td>
				<td>$1,290</td>
				<td>$1,930</td>
				<td>$3,860</td>
				<td>$5,790</td>
				<td>$7,720</td>
				<td>$11,580</td>
			</tr>

			<tr class="">
				<td>２人部屋DX</td>
				<td>$780</td>
				<td>$1,390</td>
				<td>$2,130</td>
				<td>$4,260</td>
				<td>$6,390</td>
				<td>$8,520</td>
				<td>$12,780</td>
			</tr>

			<tr class="active">
				<td>２人部屋SU</td>
				<td>$810</td>
				<td>$1,450</td>
				<td>$2,250</td>
				<td>$4,500</td>
				<td>$6,750</td>
				<td>$9,000</td>
				<td>$13,500</td>
			</tr>

		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Business Englishコース</h3>

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
				<td>１人部屋ST</td>
				<td>$830</td>
				<td>$1,490</td>
				<td>$2,330</td>
				<td>$4,660</td>
				<td>$6,990</td>
				<td>$9,320</td>
				<td>$13,980</td>
			</tr>

			<tr class="active">
				<td>１人部屋DX</td>
				<td>$880</td>
				<td>$1,590</td>
				<td>$2,530</td>
				<td>$5,060</td>
				<td>$7,590</td>
				<td>$10,120</td>
				<td>$15,180</td>
			</tr>

			<tr class="">
				<td>１人部屋SU</td>
				<td>$910</td>
				<td>$1,650</td>
				<td>$2,650</td>
				<td>$5,300</td>
				<td>$7,950</td>
				<td>$10,600</td>
				<td>$15,900</td>
			</tr>

			<tr class="active">
				<td>２人部屋ST</td>
				<td>$730</td>
				<td>$1,290</td>
				<td>$1,930</td>
				<td>$3,860</td>
				<td>$5,790</td>
				<td>$7,720</td>
				<td>$11,580</td>
			</tr>

			<tr class="">
				<td>２人部屋DX</td>
				<td>$780</td>
				<td>$1,390</td>
				<td>$2,130</td>
				<td>$4,260</td>
				<td>$6,390</td>
				<td>$8,520</td>
				<td>$12,780</td>
			</tr>

			<tr class="active">
				<td>２人部屋SU</td>
				<td>$810</td>
				<td>$1,450</td>
				<td>$2,250</td>
				<td>$4,500</td>
				<td>$6,750</td>
				<td>$9,000</td>
				<td>$13,500</td>
			</tr>
			
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Examコース</h3>

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
				<td>１人部屋ST</td>
				<td>$830</td>
				<td>$1,490</td>
				<td>$2,330</td>
				<td>$4,660</td>
				<td>$6,990</td>
				<td>$9,320</td>
				<td>$13,980</td>
			</tr>

			<tr class="active">
				<td>１人部屋DX</td>
				<td>$880</td>
				<td>$1,590</td>
				<td>$2,530</td>
				<td>$5,060</td>
				<td>$7,590</td>
				<td>$10,120</td>
				<td>$15,180</td>
			</tr>

			<tr class="">
				<td>１人部屋SU</td>
				<td>$910</td>
				<td>$1,650</td>
				<td>$2,650</td>
				<td>$5,300</td>
				<td>$7,950</td>
				<td>$10,600</td>
				<td>$15,900</td>
			</tr>

			<tr class="active">
				<td>２人部屋ST</td>
				<td>$730</td>
				<td>$1,290</td>
				<td>$1,930</td>
				<td>$3,860</td>
				<td>$5,790</td>
				<td>$7,720</td>
				<td>$11,580</td>
			</tr>

			<tr class="">
				<td>２人部屋DX</td>
				<td>$780</td>
				<td>$1,390</td>
				<td>$2,130</td>
				<td>$4,260</td>
				<td>$6,390</td>
				<td>$8,520</td>
				<td>$12,780</td>
			</tr>

			<tr class="active">
				<td>２人部屋SU</td>
				<td>$810</td>
				<td>$1,450</td>
				<td>$2,250</td>
				<td>$4,500</td>
				<td>$6,750</td>
				<td>$9,000</td>
				<td>$13,500</td>
			</tr>
		</tbody>
	</table>
</div>

					<h3 class="top30 point"><i class="fa fa-check-circle"></i> Travel Englishコース</h3>

<div class="table-responsive">
	<table class="table">
		<tbody>
			<tr class="bg-skyblue white">
				<td>単位：円</td>
				<td>１週間</td>
				<td>２週間</td>
				<td>３週間</td>
				<td>４週間</td>
			</tr>

			<tr class="">
				<td>１人部屋ST</td>
				<td>$540</td>
				<td>$920</td>
				<td>$1,350</td>
				<td>$1,670</td>
			</tr>

			<tr class="active">
				<td>１人部屋DX</td>
				<td>$590</td>
				<td>$1020</td>
				<td>$1,500</td>
				<td>$1,870</td>
			</tr>

			<tr class="">
				<td>１人部屋SU</td>
				<td>$620</td>
				<td>$1,080</td>
				<td>$1,590</td>
				<td>$1,990</td>
			</tr>

			<tr class="active">
				<td>２人部屋ST</td>
				<td>$460</td>
				<td>$760</td>
				<td>$1,110</td>
				<td>$1,350</td>
			</tr>

			<tr class="">
				<td>２人部屋DX</td>
				<td>$510</td>
				<td>$860</td>
				<td>$1,260</td>
				<td>$1,550</td>
			</tr>

			<tr class="active">
				<td>２人部屋SU</td>
				<td>$540</td>
				<td>$920</td>
				<td>$1,350</td>
				<td>$1,670</td>
			</tr>
			
		</tbody>
	</table>
</div>




					<!-- CV button -->
					<?php get_template_part( 'button/cv-button' ); ?>

					<h2 id="picture" class="detail-h2 detail-h2-sp top40"><span id="number" class="spnone">05</span><?php echo $school_name; ?>の学校写真</h2>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_brilliant_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_brilliant_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_dormitory_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_dormitory_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_dormitory_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_dormitory_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_food_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_food_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_food_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_food_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_graduation_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_graduation_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_graduation_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_graduation_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_lesson_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_lesson_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_school_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_school_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_activity_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>

					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_school_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_school_02.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_spot_01.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_spot_01.jpg" alt="image alt" class="img-responsive max-width" />
					</a>
					<a class="venobox col-sm-4 col-xs-6 padding5 bottom30" href="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_spot_02.jpg">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/school/brilliant/brilliant_spot_02.jpg" alt="image alt" class="img-responsive max-width" />
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
				<td colspan="3">Zuelling Ave. Mandaue Reclamation, Mandaue City Cebu</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">アクセス</th>
				<td colspan="3" class="active">マクタン・セブ国際空港より車で約20分</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">設立年度</th>
				<td colspan="3">2012年12月</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">講師数</th>
				<td colspan="3" class="active">12名 スタッフ5名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学生定員</th>
				<td colspan="3">40名</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">日本人比率</th>
				<td colspan="3" class="active">約100％</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">学校施設</th>
				<td colspan="3">レストラン、売店、大型ジム、エクササイズルーム、Barカウンター、ミーティングルーム、ラウンジ、オープンテラス</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊形態</th>
				<td colspan="3" class="active">コンドミニアム</td>
			</tr>
			<tr class="">
				<th scope="row" class="bg-skyblue white">宿泊設備</th>
				<td colspan="3">
					ベッド、エアコン、液晶薄型テレビ、温水シャワー、トイレ、洗面台、机、椅子、ソファー、クローゼット、鏡、電気スタンド
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
