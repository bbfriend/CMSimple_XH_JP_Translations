<?php

$plugin_tx['miniblog']['page-posts_backlinks_from']="";
$plugin_tx['miniblog']['page-posts_backlinks_to']="";
$plugin_tx['miniblog']['single-file_archive_page']="";
$plugin_tx['miniblog']['single-file_backlinks_to']="";
$plugin_tx['miniblog']['single-file_blogname_in_url']="miniblog";
$plugin_tx['miniblog']['single-file_category_list']="";
$plugin_tx['miniblog']['cf_archive_archiving_date']="Accepted date formats are YYYY-mm-dd, e.g. 2015-04-04, and d.m.YYYY, e.g. 4.4.2015";
$plugin_tx['miniblog']['cf_archive_show_archive_button']="Button is created with text \'Archive\' on top of the blog page (even if no archiving date hat been set).";
$plugin_tx['miniblog']['cf_archive_archive_headline_style']="Style of the headline of teasers of archived blog posts.";
$plugin_tx['miniblog']['cf_posts_authorised_members']="Comma separated list of user names (not full names), which are permitted to write posts, If left empty every user can write posts after login via memberpages of register_XH.";
$plugin_tx['miniblog']['cf_backlinks_also_below_content']="Usually backlinks will be put on top of blog posts (provided a backlink page name is given in the language file). If checked, an additional backlink will be added at the bottom of the blog post.";
$plugin_tx['miniblog']['cf_blogpage_2_columns']="If checked, teasers of the blog page will be in 2 columns.";
$plugin_tx['miniblog']['cf_blogpage_limit_nr_of_posts_per_page']="If you enter a number, the blog page will be divided into multiple pages with only the entered number of posts per page. Page selection in a row with category selection";
$plugin_tx['miniblog']['cf_blogpage_order_posts']="Either newest first, oldest first or alphabetical sorting. Note: alphabetical sorting of accented letters relies on the language file setting of \"URL-Characters:\" \"New\" and \"Original\". You must enter exchange values for accented letters (e.g. ä|ö|ü), otherwise accented letters will not be sorted but put on top of the list.";
$plugin_tx['miniblog']['cf_category_enable_multicategory']="If checked, multiple categories can be assigned to single file blog posts.";
$plugin_tx['miniblog']['cf_category_from_pagenames_with']="This concerns only page based blog posts, and is <b>usually left empty!</b> For page based posts Miniblog usually needs 3 levels: blog page 1st level, categories 2nd level, blog posts  3rd level. If you have only 2 levels, page names of 2nd level pages starting with the characters entered here, <b>e.g. \"Cat_\"</b> will serve as categories, while the remaining pages of the 2nd level serve as blog posts.";
$plugin_tx['miniblog']['cf_comments_plugin']="If you want to enable comments on single file posts, you have to install a comment plugin and enter the name of that plugin the way it is used in its plugin call, i.e. for Twocents_XH enter \"twocents\". <br>P.S.: For comments on <b>page based posts</b> enter the plugin call on the content area just as a any other plugin call.";
$plugin_tx['miniblog']['cf_keyword_2nd_source']="1st source is page data meta keywords. If empty, the keyword is taken from the page text, either the first h6, h5, h4 heading of the first bold or italic text. Without entry no 2nd source will be used.";
$plugin_tx['miniblog']['cf_posts_from_members']="If checked and \"From single files\" also checked (!), logged in (via Memberpages/Register_XH) users/members can write blog posts which will be stored as single files. Plugin call {{{miniblogwriter}}}";
$plugin_tx['miniblog']['cf_posts_from_pages']="If checked, Miniblog will look for blog posts in standard CMSimple pages.";
$plugin_tx['miniblog']['cf_posts_from_single_files']="If checked, miniblog will look for blog post in single files, which can be edited by the admin.";
$plugin_tx['miniblog']['cf_teaser_2nd_source']="Concerns only page based blog posts. What is the source ot the teaser text? 1st source is page data meta description. If empty, the teaser is taken from the page text, either starting right after the heading or starting from the first &lt;p>;-paragraph.";
$plugin_tx['miniblog']['cf_teaser_generated_length']="Concerns only page based blog posts, where the teaser is generated automatically. Enter the number of characters, maximum value: 500";
$plugin_tx['miniblog']['cf_teaser_headline_style']="HTML style for teaser headlines in the blog page.";
$plugin_tx['miniblog']['cf_teaser_img_path_for_members']="Path from the standard image folder to a folder, in which external posters can select an image for the blog post teaser. If empty, no image can be selected.";
$plugin_tx['miniblog']['cf_teaser_img_position']="Setting which determines the look of the teaser on the blog page:<br><b>top:</b> image on top of the teaser<br><b>left:</b> image left of the teaser and all the text right of it<br><b>title:</b> image left of the title (as float)<br><b>teaser:</b> image left in the teaser text as float below the title.";
$plugin_tx['miniblog']['error_ajax']="An error occured trying to save the header of your blog post. Please inform the webmaster. The contents of your blog post is not affected and you may continue working on it.";
$plugin_tx['miniblog']['error_allowed_chars1']="Only alphanumeric chars, hyphen and underscore allowed";
$plugin_tx['miniblog']['error_allowed_chars2']="Only alphanumeric chars and hyphen allowed";
$plugin_tx['miniblog']['error_category_missing']="Category missing";
$plugin_tx['miniblog']['error_date_missing']="No date";
$plugin_tx['miniblog']['error_folder_already_in_use']="Folder already in use by another user. Please choose a different folder name.'";
$plugin_tx['miniblog']['error_javascript_missing']="Please enable java script. otherwise no funktionality";
$plugin_tx['miniblog']['error_no_extedit']="The plugin Extedit_XH is not installed";
$plugin_tx['miniblog']['error_publishing_needs_date']="Please enter a date for publication of the post. ";
$plugin_tx['miniblog']['error_publishing_needs_title']="Please enter a title for publication of the post. ";
$plugin_tx['miniblog']['error_save_before_publishing']="Blog contents not yet saved! For publication the blog's contents must be saved. ";
$plugin_tx['miniblog']['error_title_missing']="Title not yet given";
$plugin_tx['miniblog']['error_not_authorised']="Presently not activated for writing of posts";
$plugin_tx['miniblog']['hint_archive_config_page']="after changing the archiving date";
$plugin_tx['miniblog']['hint_archive_language_page']="after changing the archive page";
$plugin_tx['miniblog']['hint_language_var']="Important values to be set in the languages file:<br><ul><i>For blog posts from CMSimple pages</i><li><b>page-posts_backlinks_to:</b> Enter here the name of the blog page. If left empty there will be no backlinks.<li><b>page-posts_backlinks_from:</b> Leave this empty, except if your blogpages aren't subpages of the blog page but subpages of a different page. Then enter the name of that page</li><br><i>For blog posts from single files</i><li><b>single-file_blogname_in_url:</b> The start of the URLs to the blog posts. Must differ from page names of level 1.<li><b>single-file_category_list:</b> Comma separated list of all your categories.<li><b>single-file_backlinks_to:</b> Name of page(s), towards which the backlinks lead. If you have <u>multiple blogs, enter the names of all your blog pages as comma separated</u> list (no spaces after commas). In the blog post header you can select to which blog the post should belong.<li><b>single-file_archive_page:</b> If the blog archive should be put on an extra page, enter the page name here and call the archive with {{{miniblog}}} on that page.</ul>";
$plugin_tx['miniblog']['menu_main']="Blog posts";
$plugin_tx['miniblog']['text_active_blog']="Active blog";
$plugin_tx['miniblog']['text_add_new_post']="create new post";
$plugin_tx['miniblog']['text_allow_comments']="allow comments";
$plugin_tx['miniblog']['text_comments_1']="%s comment";
$plugin_tx['miniblog']['text_comments_2_4']="%s comments";
$plugin_tx['miniblog']['text_comments_5']="%s comments";
$plugin_tx['miniblog']['text_alt_delete']="Delete post";
$plugin_tx['miniblog']['text_archive']="Archive";
$plugin_tx['miniblog']['text_as_config']="Pos. as config";
$plugin_tx['miniblog']['text_author_or_keyword']="Author's name or keyword";
$plugin_tx['miniblog']['text_backlink']="Back to Blog Selection";
$plugin_tx['miniblog']['text_blog_post_content']="Blog post content:";
$plugin_tx['miniblog']['text_category']="Category";
$plugin_tx['miniblog']['text_choose_blog']="Choose blog to which your article will be posted";
$plugin_tx['miniblog']['text_close_user_folder_mapping']="Close user-folder-mapping";
$plugin_tx['miniblog']['text_confirm_delete']="Delete definitely?";
$plugin_tx['miniblog']['text_continue_editing_blog_post']="Continue working on existing post? Or start a new post?";
$plugin_tx['miniblog']['text_date_of_post']="Date of post";
$plugin_tx['miniblog']['text_delete']="delete";
$plugin_tx['miniblog']['text_delete_post']="Delete post";
$plugin_tx['miniblog']['text_edit_header']="edit header";
$plugin_tx['miniblog']['text_edit_user_folder_mapping']="Edit user-folder-mapping";
$plugin_tx['miniblog']['text_enter_category_list']="Enter category list first in language file";
$plugin_tx['miniblog']['text_explain_blog_writing']="In blog posts head data and contents are saved separately";
$plugin_tx['miniblog']['text_file_based_blog_posts']="Single File Blog Posts";
$plugin_tx['miniblog']['text_folder']="Folder";
$plugin_tx['miniblog']['text_foldernaming_request']="<p><b>Hello %s:</b></p><p>Before you can write blog posts, a folder has to be created for saving your posts. The name of this folder will be used in the URL to your posts. For security reasons it would be better not to use your user name als folder name. Once you entered a folder name, we won't ask for it again.</p><p>Please choose a name (without accented chars) and enter it here:<p>";
$plugin_tx['miniblog']['text_header_blogpost']="Head data for";
$plugin_tx['miniblog']['text_if_member_check_single_file']="<b>Posts From members</b> requires checking <b>Post From single files</b>";
$plugin_tx['miniblog']['text_image_browser']="Image";
$plugin_tx['miniblog']['text_image_teaser']="image in teaser text";
$plugin_tx['miniblog']['text_image_left']="image left, text right";
$plugin_tx['miniblog']['text_image_title']="image left of title";
$plugin_tx['miniblog']['text_image_top']="image on top";
$plugin_tx['miniblog']['text_login_required']="You have to log in to be able to write blog posts.";
$plugin_tx['miniblog']['text_mode_edit']="Blog content: edit";
$plugin_tx['miniblog']['text_mode_view']="Blog content: view";
$plugin_tx['miniblog']['text_more']="&hellip; more »";
$plugin_tx['miniblog']['text_name_of_delete']="Name of the post to be deleted";
$plugin_tx['miniblog']['text_name_of_my_folder']="Name of my folder";
$plugin_tx['miniblog']['text_new_blog_post']="Start new blog post";
$plugin_tx['miniblog']['text_new_folder_user_mapping']="Enter new folder-user-mapping";
$plugin_tx['miniblog']['text_new_post']="New blog post";
$plugin_tx['miniblog']['text_no_selection']="No selection";
$plugin_tx['miniblog']['text_no_teaser_img']="no teaser image";
$plugin_tx['miniblog']['text_not_published']="not published";
$plugin_tx['miniblog']['text_please_choose']="Please choose";
$plugin_tx['miniblog']['text_posts_without_user']="Folders with posts without matching user";
$plugin_tx['miniblog']['text_publ']="publ.";
$plugin_tx['miniblog']['text_publish_post']="Publish post";
$plugin_tx['miniblog']['text_published']="published";
$plugin_tx['miniblog']['text_save_changes']="Save changes";
$plugin_tx['miniblog']['text_save_header']="save header";
$plugin_tx['miniblog']['text_saved']="Saved";
$plugin_tx['miniblog']['text_send']="Send";
$plugin_tx['miniblog']['text_short_blog_title']="Short title";
$plugin_tx['miniblog']['text_teaser_editing']="<b>Teaser</b> (appears only on the blog page)";
$plugin_tx['miniblog']['text_teaser_img']="Teaser image";
$plugin_tx['miniblog']['text_title_editing']="<b>Title</b> (appears on the blog page and on top of blog post)";
$plugin_tx['miniblog']['text_today']="today";
$plugin_tx['miniblog']['text_usage_multicategory']="CTRL → multiple selection";
$plugin_tx['miniblog']['text_usage_of_folder']="Presently %s different folders in use for blog posts";
$plugin_tx['miniblog']['text_user_name']="User Name";
$plugin_tx['miniblog']['text_warning_archive']="Posts older as %s will be mapped as archived";
$plugin_tx['miniblog']['text_warning_save_header']="Save head data first";
$plugin_tx['miniblog']['text_welcome']="Welcome to writing blog posts";
$plugin_tx['miniblog']['text_wide']="2 columns wide";
$plugin_tx['miniblog']['update_archive']="Update archive mapping of single file posts";
$plugin_tx['miniblog']['update_archive_success']="Archive mapping sucessfully updated";
$plugin_tx['miniblog']['update_successful']="Miniblog Config succesfully updated to version %s.";


?>