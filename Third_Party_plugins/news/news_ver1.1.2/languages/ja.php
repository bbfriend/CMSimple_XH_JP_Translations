<?php
/**
 * @file en.php
 * @brief Language file en.
 *
 * @author David Stutz
 * @license GPLv3
 * @package news
 * @see http://sourceforge.net/projects/cmsimplenews/
 * 
 *  Copyright 2012 - 2018 David Stutz
 * 
 * 	This file is part of the news plugin for CMSimple.
 *
 *  The plugin is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The plugin is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  @see <http://www.gnu.org/licenses/>.
 */

	/* Plugin bar. */
	$plugin_tx["news"]['menu_main']="記事管理";
	
	/* Titles. */
	$plugin_tx["news"]["title_plugin_text"]="投稿記事の管理";
	$plugin_tx["news"]["title_new"]="カテゴリの追加";
	$plugin_tx["news"]["title_add"]="記事追加";
	$plugin_tx["news"]["title_remove"]="カテゴリの削除";
	$plugin_tx["news"]["title_edit"]="記事編集";
	$plugin_tx["news"]["title_rss"]="カテゴリのRSS";
	$plugin_tx["news"]["title_delete"]="記事の削除";
	$plugin_tx["news"]["title_config"]="カテゴリの設定";

	/* Main plugin. */
	$plugin_tx["news"]["Category"]="選択中のカテゴリ";
	$plugin_tx["news"]["Successfully created new category."]="カテゴリを作成しました";
	$plugin_tx["news"]["Fill a valid name."]="Fill a valid name.";
	$plugin_tx["news"]["Name"]="カテゴリ名";
	$plugin_tx["news"]["Save"]="●保存する";
	$plugin_tx["news"]["Successfully saved changes."]="保存しました";
	$plugin_tx["news"]["Fill a title and select a category."]="Fill a title and select a category.";
	$plugin_tx["news"]["Edit entry"]="編集";
	$plugin_tx["news"]["Are you sure you want to delete the entry?"]="削除しますか？";
	$plugin_tx["news"]["I'm sure."]="実行";
	$plugin_tx["news"]["Description"]="<font size=\"+1\">ブログ本文</font> 編集エリアの表示/非表示";
	$plugin_tx["news"]["Title"]="タイトル";
	$plugin_tx["news"]["Successfully deleted entry."]="削除しました";
	$plugin_tx["news"]["Successfully added entry."]="追加しました.";
	$plugin_tx["news"]["No categories found. Create a new one."]="カテゴリが１つもありません。最初にカテゴリを作成します.";
	$plugin_tx["news"]["Created"]="作成日";
	$plugin_tx["news"]["State"]="状態";
	$plugin_tx["news"]["Publish immediately."]="すぐに公開.";
	$plugin_tx["news"]["Publish."]="公開.";
	$plugin_tx["news"]["Publish on"]="公開日を指定･･･過去や未来（予約可）を指定する場合";
	$plugin_tx["news"]["Not published"]="非公開";
	$plugin_tx["news"]["Published"]="公開";
	$plugin_tx["news"]["More..."]="More...";
	$plugin_tx["news"]["Are you sure you want to delete the category with all its entries?"]="カテゴリとそこに含まれる記事を削除しますか？";
	$plugin_tx["news"]["Successfully deleted category."]="カテゴリを削除しました";
	$plugin_tx["news"]["News category not found."]="カテゴリが見つかりません";
	$plugin_tx["news"]["The category's name should not contain any whitespace or special characters."]="名前（カテゴリ名）は、空白や特殊文字を含めることはできません。";
	$plugin_tx["news"]["Entry successfully published."]="公開しました.";
	$plugin_tx["news"]["Entry successfully taken out."]="非公開にしました";
	$plugin_tx["news"]["Delete the selected category."]="カテゴリの削除.";
	$plugin_tx["news"]["See the RSS link of the category."]="選択中のカテゴリのRSSフィードの表示.";
	$plugin_tx["news"]["Add a new category."]="カテゴリの追加.";
	$plugin_tx["news"]["Add a new entry to this category."]="選択中のカテゴリに記事を追加.";
	$plugin_tx["news"]["Edit the selected entry."]="記事の編集.";
	$plugin_tx["news"]["Publish the selected entry."]="公開/非公開の変更";
	$plugin_tx["news"]["Take out the selected entry."]="公開/非公開の変更.";
	$plugin_tx["news"]["Delete the selected entry."]="記事の削除.";
	$plugin_tx["news"]["No entries found."]="記事が見つかりません";
	$plugin_tx["news"]["Category not found."]="カテゴリがありません.";
	$plugin_tx["news"]["Edit the settings of the selected gallery."]="選択中のカテゴリの設定";
	$plugin_tx["news"]["Next page:"]="次:";
	$plugin_tx["news"]["Previous page:"]="前:";
	$plugin_tx["news"]["Short"]="<font size=\"+1\">ニュース(前文・抜粋</font>ブログﾓｰﾄﾞ時）編集エリアの表示/非表示";
	$plugin_tx["news"]["Edit the selected entry:"]="編集:";
	$plugin_tx["news"]["Publish the selected entry:"]="公開する:";
	$plugin_tx["news"]["Take out the selected entry:"]="非公開にする:";
	$plugin_tx["news"]["Delete the selected entry:"]="削除:";
	
	/* Configuration help. */
	$plugin_tx["news"]["cf_csv_filepath"]="記事ファイルの保存場所。記事ファイルはCSV形式で保存されます。デフォルト：content/plugins/news";
	$plugin_tx["news"]["cf_csv_delimiter"]="記事ファイル：CSV形式の区切り文字 デフォルト #";
$plugin_tx["news"]["cf_csv_locale"]="setlocale関数の設定：記事のタイトルや内容が表示されない場合に設定 setlocale(LC_ALL,設定値)が使用される。日本語の場合　ja_JP.UTF-8";
	$plugin_tx["news"]["cf_date_format"]="日付フォーマット Y-m-d や y/m/d . 参照  http://php.net/manual/de/function.date.php. String";
	$plugin_tx["news"]["cf_date_format_backend"]="日付フォーマット（管理画面内） Y-m-d や y/m/d . 参照 http://php.net/manual/de/function.date.php. String";
	$plugin_tx["news"]["cf_newsticker_speed"]="ニュースティッカーの測度. 0~1の間. デフォルト　0.1";
	$plugin_tx["news"]["cf_newsticker_controls"]="コントローラーの使用 (Stop, Resume, Next, Previous). 'true' または'false'　デフォルト false（使用しない）";
	$plugin_tx["news"]["cf_newsticker_title_text"]="ニュースティッカーのタイトル";
	$plugin_tx["news"]["cf_newsticker_effect"]="エフェクト効果　'reveal' または 'fade'　デフォルト reveal.";
	$plugin_tx["news"]["cf_newsticker_delay"]="表示するニュースの間隔　デフォルト 2000";
	$plugin_tx["news"]["cf_newsticker_fade_in_speed"]="フェードINの測度 デフォルト 600";
	$plugin_tx["news"]["cf_newsticker_fade_out_speed"]="フェードOUTの測度 デフォルト 300";
	$plugin_tx['news']['cf_newsticker_template']="'true' if newsticker will be used within your templates, 'false' otherwise.";
	$plugin_tx['news']['cf_newsticker_template']="'true' if newsticker will be used within your templates, 'false' otherwise.";
	$plugin_tx['news']['cf_csv_enclosure']="CSV形式の囲み文字　デフォルト \" ";
	$plugin_tx["news"]["cf_rss_title"]="The title of the category RSS feed.";
	$plugin_tx["news"]["cf_rss_description"]="The description of the category RSS feed.";
	$plugin_tx["news"]["cf_rss_editor"]="The editor of the category RSS feed.";
	$plugin_tx["news"]["cf_rss_link"]="Link to the news page or blog page of this category, see documentation for details.";
	$plugin_tx["news"]["cf_newsslider_speed"]="スライダーの測度　1~5000の間　デフォルト 2000";
	$plugin_tx["news"]["cf_newsslider_pause_hover"]="マウスオーバー時に停止するか。'true' または'false'を設定　デフォルト true（停止）";
//	$plugin_tx["news"]["cf_newsslider_pause_hover"]="Pause the slider on mouse over. 'true' or 'false'.";
	$plugin_tx['news']['cf_template_newsscroller']="newsscrollerを使用する場合　'true'を設定します。テンプレートに記述する必要があります.デフォルト 'true'.";
	$plugin_tx["news"]["cf_newsscroller_speed"]="newsscrollerの測度. デフォルト 0.07";
	$plugin_tx["news"]["cf_blog"]="記事モード選択：ニュース・モード(単純なNews：false)か、ブログモード(ブログ風：true)か？を選びます。デフォルト false ";
	$plugin_tx["news"]["cf_datepicker_format"]="datepickerの日付フォーマット　yy/mm/dd など　デフォルト dd.mm.yy http://api.jqueryui.com/datepicker/";
	$plugin_tx["news"]["cf_pagination_backend"]="1頁に表示する記事数（管理画面内）1以上を設定 デフォルト 10";
	$plugin_tx["news"]["cf_pagination_archive"]="1頁に表示する記事数 1以上を設定 デフォルト 10";
	$plugin_tx["news"]["cf_rss_file"]="RSS表示用プログラム名　CMSimple rootからの相対パス　デフォルト rss.php";
	$plugin_tx["news"]["cf_template_newsticker"]="ニュースティッカーを使用する場合　'true'を設定します。テンプレートに記述する必要があります.デフォルト 'false'.";
	$plugin_tx["news"]["cf_template_newsslider"]="ニューススライダーを使用する場合　'true'を設定します。テンプレートに記述する必要があります.デフォルト 'false'.";
	$plugin_tx["news"]["cf_jquery_core"]="jQUeryのコアファイル名. 使用するjQuery (UI)ファイルは　news/jquery/js/ に設置します｡デフォルト jquery-1.9.1.min.js";
	$plugin_tx["news"]["cf_jquery_ui"]="jQUery UI javascript のファイル名. 使用するjQuery (UI)ファイルは　news/jquery/js/ に設置します｡デフォルト jquery-ui-1.8.21.custom.min.js";
	$plugin_tx["news"]["cf_jquery_ui_css"]="jQUery UI CSS のファイル名. 使用する jQuery (UI) CSS ファイルは　news/jquery/css/に設置します｡デフォルト jquery-ui-1.8.21.custom.css";
	$plugin_tx["news"]["cf_categories_sort_function"]="カテゴリの並び順　昇順'news_categories_sort_asc' または 降順'news_categories_sort_desc' デフォルト news_categories_sort_asc";
    
?>
