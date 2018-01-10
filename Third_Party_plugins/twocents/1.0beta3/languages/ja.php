<?php
/** Version: 1.0beta3 ***/
$plugin_tx['twocents']['format_heading']="{DATE} {TIME} 投稿者:{USER}";
$plugin_tx['twocents']['format_date']="Y/d/n";
$plugin_tx['twocents']['format_time']="H:i";

$plugin_tx['twocents']['spam_words']="[/url],[url=,.aspx,換金,porn,viagra";
$plugin_tx['twocents']['comment_count_0']="コメント 無し";
$plugin_tx['twocents']['comment_count_1']="1 コメント";
$plugin_tx['twocents']['comment_count_2_4']="コメント %d";
$plugin_tx['twocents']['comment_count_5']="コメント %d";

$plugin_tx['twocents']['label_edit']="編集";
$plugin_tx['twocents']['label_hide']="非公開";
$plugin_tx['twocents']['label_show']="公開";
$plugin_tx['twocents']['label_delete']="削除";
$plugin_tx['twocents']['label_user']="名前";
$plugin_tx['twocents']['label_email']="メールアドレス（非公開）";
$plugin_tx['twocents']['label_message']="コメント";
$plugin_tx['twocents']['label_new']="コメントする";
$plugin_tx['twocents']['label_add']="送信";
$plugin_tx['twocents']['label_update']="更新";
$plugin_tx['twocents']['label_cancel']="キャンセル";
$plugin_tx['twocents']['label_reset']="リセット";
$plugin_tx['twocents']['label_bold']="太字";
$plugin_tx['twocents']['label_italic']="斜字";
$plugin_tx['twocents']['label_link']="リンク";
$plugin_tx['twocents']['label_unlink']="リンク削除";

$plugin_tx['twocents']['label_convert_to_html']="既存のコメントデータを 表示形式： HTML形式 に変換します";
$plugin_tx['twocents']['label_convert_to_plain_text']="既存のコメントデータを テキスト形式 に変換します（HTMLタグが消去されます）";
$plugin_tx['twocents']['label_import_comments']="Commentsプラグインのデータを インポート";
$plugin_tx['twocents']['label_import_gbook']="GBookプラグインのデータを インポート";
$plugin_tx['twocents']['email_subject']="新しいコメントが投稿されました";

$plugin_tx['twocents']['email_attribution']="In <%1\$s>, %2\$s (<%3\$s>) wrote:";

$plugin_tx['twocents']['error_topicname']="twocentsの topicname は、文字（A-Z）、数字（0-9）とマイナス記号(-)だけです！";
$plugin_tx['twocents']['error_user']="お名前が変です";
$plugin_tx['twocents']['error_email']="メールアドレスが変です";
$plugin_tx['twocents']['error_message']="コメントが変です";
$plugin_tx['twocents']['error_captcha']="キャプチャが変です";
$plugin_tx['twocents']['message_added']="コメントは追加されました.";
$plugin_tx['twocents']['message_moderated']="コメントは承認待ちです";
$plugin_tx['twocents']['message_delete']="このコメントは削除されました";
$plugin_tx['twocents']['message_converted_html']="全てのコメントデータが表示形式:HTML に変換されました。基本設定 COMMENTS Markup が HTML になってる必要があります";
$plugin_tx['twocents']['message_converted_plain']="全てのコメントデータが表示形式:テキスト形式 に変換されました。基本設定の COMMENTS Markup が 空欄 になってる必要があります";
$plugin_tx['twocents']['message_imported_comments']="Commentsプラグイン のコメントデータがインポートされました";
$plugin_tx['twocents']['message_imported_gbook']=" GBookプラグインのコメントデータがインポートされました";
$plugin_tx['twocents']['message_link']="Enter the URL to link to:";

$plugin_tx['twocents']['realblog_heading']="コメント";
$plugin_tx['twocents']['syscheck_extension']="extension '%s' is loaded";
$plugin_tx['twocents']['syscheck_fail']="failure";
$plugin_tx['twocents']['syscheck_message']="Checking that %1\$s … %2\$s";
$plugin_tx['twocents']['syscheck_phpversion']="PHP バージョン ≥ %s";
$plugin_tx['twocents']['syscheck_success']="OK";
$plugin_tx['twocents']['syscheck_title']="システムチェック";
$plugin_tx['twocents']['syscheck_warning']="警告";
$plugin_tx['twocents']['syscheck_writable']="'%s' の書込み";
$plugin_tx['twocents']['syscheck_xhversion']="CMSimple_XH バージョン ≥ %s";

$plugin_tx['twocents']['alt_icon']="空の吹き出し";
$plugin_tx['twocents']['menu_main']="データ変換";
$plugin_tx['twocents']['cf_comments_moderated']="新しいコメントを非表示（承認制）にする。デフォルト：ノーチェック（表示）";
$plugin_tx['twocents']['cf_comments_order']="コメントの並び順：\"ASC\"：古い順　 \"DESC\"新しい順　デフォルト：\"ASC\"";
$plugin_tx['twocents']['cf_comments_markup']="表示形式。空欄でテキスト形式。HTML形式･･･シンプルなHTML（太字/斜体/リンク)が入力可能となります";
$plugin_tx['twocents']['cf_email_address']="新しいコメントが投稿されたら通知するメールアドレス。空欄で通知されません。デフォルト：空欄";
$plugin_tx['twocents']['cf_email_linebreak']="通知を受ける電子メールの改行の形式。壊れた電子メールを受信した時は、「LF」に設定します。デフォルト：CRLF";
$plugin_tx['twocents']['cf_pagination_max']="ページ上のコメントの最大数。ページングを完全に抑制する（suppress）には、2147483647などの非常に大きな数値を使用します。";
$plugin_tx['twocents']['cf_pagination_radius']="ページリンクの数：ページ区切りの現在のページの前後に表示する。";
$plugin_tx['twocents']['cf_captcha_plugin']="CAPTCHA プラグインのフォルダー名. 使用しない場合は空白。<br>Ex. Recaptcha_XHプラグインの場合は、recaptcha となります";
$plugin_tx['twocents']['cf_realblog_heading']="Realblog_XHプラグインで表示するコメントの大きさ（Ｈタグ）";

?>
