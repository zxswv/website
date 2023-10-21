
/*-------------------------------------------
 * デザインパターン
 *-------------------------------------------/


/*-------------------------------------------
旧st-kanri.phpより移動（ここから）
*/

	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa .st-paragraph-kaiwa-text,
	.is-style-st-paragraph-kaiwa-b .st-paragraph-kaiwa-text {
		background-color: #586365;
	}
	.is-style-st-paragraph-kaiwa::after,
	.is-style-st-paragraph-kaiwa-b::after {
		border-right-color: #586365;
	}


/*--------------------------------
Gutenberg カラーパレット
---------------------------------*/
:root .has-pale-pink-color.is-style-st-heading-custom-attention::before,
:root .has-pale-pink-color.is-style-st-heading-custom-check::before,
:root .has-pale-pink-color {
	color: #f78da7 !important;
}

:root .has-soft-red-color.is-style-st-heading-custom-attention::before,
:root .has-soft-red-color.is-style-st-heading-custom-check::before,
:root .has-soft-red-color {
	color: #e92f3d !important;
}

:root .has-light-grayish-red-color.is-style-st-heading-custom-attention::before,
:root .has-light-grayish-red-color.is-style-st-heading-custom-check::before,
:root .has-light-grayish-red-color {
	color: #fdf0f2 !important;
}

:root .has-vivid-yellow-color.is-style-st-heading-custom-attention::before,
:root .has-vivid-yellow-color.is-style-st-heading-custom-check::before,
:root .has-vivid-yellow-color {
	color: #ffc107 !important;
}

:root .has-very-pale-yellow-color.is-style-st-heading-custom-attention::before,
:root .has-very-pale-yellow-color.is-style-st-heading-custom-check::before,
:root .has-very-pale-yellow-color {
	color: #fffde7 !important;
}

:root .has-light-green-cyan-color.is-style-st-heading-custom-attention::before,
:root .has-light-green-cyan-color.is-style-st-heading-custom-check::before,
:root .has-light-green-cyan-color {
	color: #eefaff !important;
}

:root .has-pale-cyan-blue-color.is-style-st-heading-custom-attention::before,
:root .has-pale-cyan-blue-color.is-style-st-heading-custom-check::before,
:root .has-pale-cyan-blue-color {
	color: #8ed1fc !important;
}

:root .has-pale-cyan-blue-color.is-style-st-heading-custom-attention::before,
:root .has-pale-cyan-blue-color.is-style-st-heading-custom-check::before,
:root .has-pale-cyan-blue-color {
	color: #8ed1fc !important;
}

:root .has-vivid-cyan-blue-color.is-style-st-heading-custom-attention::before,
:root .has-vivid-cyan-blue-color.is-style-st-heading-custom-check::before,
:root .has-vivid-cyan-blue-color {
	color: #0693e3 !important;
}

:root .has-very-light-gray-color.is-style-st-heading-custom-attention::before,
:root .has-very-light-gray-color.is-style-st-heading-custom-check::before,
:root .has-very-light-gray-color {
	color: #fafafa !important;
}

:root .has-very-dark-gray-color.is-style-st-heading-custom-attention::before,
:root .has-very-dark-gray-color.is-style-st-heading-custom-check::before,
:root .has-very-dark-gray-color {
	color: #313131 !important;
}

:root .has-white-color.is-style-st-heading-custom-attention::before,
:root .has-white-color.is-style-st-heading-custom-check::before,
:root .has-white-color {
	color: #ffffff !important;
}

:root .has-pale-pink-background-color {
	background-color: #f78da7 !important;
}

:root .has-soft-red-background-color {
	background-color: #e92f3d !important;
}

:root .has-light-grayish-red-background-color {
	background-color: #fdf0f2 !important;
}

:root .has-vivid-yellow-background-color {
	background-color: #ffc107 !important;
}

:root .has-very-pale-yellow-background-color {
	background-color: #fffde7 !important;
}

:root .has-light-green-cyan-background-color {
	background-color: #eefaff !important;
}

:root .has-pale-cyan-blue-background-color {
	background-color: #8ed1fc !important;
}

:root .has-vivid-cyan-blue-background-color {
	background-color: #0693e3 !important;
}

:root .has-very-light-gray-background-color {
	background-color: #fafafa !important;
}

:root .has-very-dark-gray-background-color {
	background-color: #313131 !important;
}

:root .has-white-background-color {
	background-color: #ffffff !important;
}

:root .has-soft-red-border-color {
	border-color: #e92f3d !important;
}

:root .has-light-grayish-red-border-color {
	border-color: #fdf0f2 !important;
}

:root .has-vivid-yellow-border-color {
	border-color: #ffc107 !important;
}

:root .has-very-pale-yellow-border-color {
	border-color: #fffde7 !important;
}

:root .has-light-green-cyan-border-color {
	border-color: #eefaff !important;
}

:root .has-pale-cyan-blue-border-color {
	border-color: #8ed1fc !important;
}

:root .has-vivid-cyan-blue-border-color {
	border-color: #0693e3 !important;
}

:root .has-very-light-gray-border-color {
	border-color: #fafafa !important;
}

:root .has-very-dark-gray-border-color {
	border-color: #313131 !important;
}

:root .has-white-border-color {
	border-color: #ffffff !important;
}


/** インラインの文字色（カラーパレット） */
.has-inline-color.has-pale-pink-color {
	color: #f78da7;
}

.has-inline-color.has-soft-red-color {
	color: #e92f3d;
}

.has-inline-color.has-light-grayish-red-color {
	color: #fdf0f2;
}

.has-inline-color.has-vivid-yellow-color {
	color: #ffc107;
}

.has-inline-color.has-very-pale-yellow-color {
	color: #fffde7;
}

.has-inline-color.has-light-green-cyan-color {
	color: #eefaff!important;
}

.has-inline-color.has-pale-cyan-blue-color {
	color: #8ed1fc;
}

.has-inline-color.has-vivid-cyan-blue-color {
	color: #0693e3;
}

.has-inline-color.has-very-light-gray-color {
	color: #fafafa;
}

.has-inline-color.has-very-dark-gray-color {
	color: #313131;
}

.has-inline-color.has-white-color {
	color: #ffffff;
}

/** カラーパレット（文字色）選択時のアイコン */
[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-pale-pink-color::before {
	color: #f78da7;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-soft-red-color::before {
	color: #e92f3d;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-light-grayish-red-color::before {
	color: #fdf0f2;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-vivid-yellow-color::before {
	color: #ffc107;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-very-pale-yellow-color::before {
	color: #fffde7;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-light-green-cyan-color::before {
	color: #eefaff!important;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-pale-cyan-blue-color::before {
	color: #8ed1fc;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-vivid-cyan-blue-color::before {
	color: #0693e3;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-very-light-gray-color::before {
	color: #fafafa;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-very-dark-gray-color::before {
	color: #313131;
}

[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-white-color::before {
	color: #ffffff;
}

/* カラーパレット選択時の見出しライン */
.is-style-st-heading-custom-line.has-pale-pink-color::after {
	background-color: #f78da7;
}

.is-style-st-heading-custom-line.has-soft-red-color::after {
	background-color: #e92f3d;
}

.is-style-st-heading-custom-line.has-light-grayish-red-color::after {
	background-color: #fdf0f2;
}

.is-style-st-heading-custom-line.has-vivid-yellow-color::after {
	background-color: #ffc107;
}

.is-style-st-heading-custom-line.has-very-pale-yellow-color::after {
	background-color: #fffde7;
}

.is-style-st-heading-custom-line.has-light-green-cyan-color::after {
	background-color: #eefaff!important;
}

.is-style-st-heading-custom-line.has-pale-cyan-blue-color::after {
	background-color: #8ed1fc;
}

.is-style-st-heading-custom-line.has-vivid-cyan-blue-color::after {
	background-color: #0693e3;
}

.is-style-st-heading-custom-line.has-very-light-gray-color::after {
	background-color: #fafafa;
}

.is-style-st-heading-custom-line.has-very-dark-gray-color::after {
	background-color: #313131;
}

.is-style-st-heading-custom-line.has-white-color::after {
	background-color: #ffffff;
}

/* カラーパレット（背景色）選択時のふきだし */
.is-style-st-paragraph-kaiwa.has-pale-pink-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-pale-pink-background-color::after {
	border-right-color: #f78da7;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-pale-pink-background-color::after {
	border-top-color: #f78da7;
}
/* カウント */
.is-style-st-heading-custom-count.has-pale-pink-background-color::before {
	color: #f78da7;
}
/* ステップ */
.is-style-st-heading-custom-step.has-pale-pink-background-color::before {
	color: #f78da7;
}
.is-style-st-heading-custom-step.has-pale-pink-background-color::after {
    border-color: #f78da7;
	color: #f78da7;
}

.is-style-st-paragraph-kaiwa.has-soft-red-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-soft-red-background-color::after {
	border-right-color: #e92f3d;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-soft-red-background-color::after {
	border-top-color: #e92f3d;
}
/* カウント */
.is-style-st-heading-custom-count.has-soft-red-background-color::before {
	color: #e92f3d;
}
/* ステップ */
.is-style-st-heading-custom-step.has-soft-red-background-color::before {
	color: #e92f3d;
}
.is-style-st-heading-custom-step.has-soft-red-background-color::after {
    border-color: #e92f3d;
	color: #e92f3d;
}

.is-style-st-paragraph-kaiwa.has-light-grayish-red-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-light-grayish-red-background-color::after {
	border-right-color: #fdf0f2;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-light-grayish-red-background-color::after {
	border-top-color: #fdf0f2;
}
/* カウント */
.is-style-st-heading-custom-count.has-light-grayish-red-background-color::before {
	color: #fdf0f2;
}
/* ステップ */
.is-style-st-heading-custom-step.has-light-grayish-red-background-color::before {
	color: #fdf0f2;
}
.is-style-st-heading-custom-step.has-light-grayish-red-background-color::after {
    border-color: #fdf0f2;
	color: #fdf0f2;
}

.is-style-st-paragraph-kaiwa.has-vivid-yellow-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-vivid-yellow-background-color::after {
	border-right-color: #ffc107;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-vivid-yellow-background-color::after {
	border-top-color: #ffc107;
}
/* カウント */
.is-style-st-heading-custom-count.has-vivid-yellow-background-color::before {
	color: #ffc107;
}
/* ステップ */
.is-style-st-heading-custom-step.has-vivid-yellow-background-color::before {
	color: #ffc107;
}
.is-style-st-heading-custom-step.has-vivid-yellow-background-color::after {
    border-color: #ffc107;
	color: #ffc107;
}

.is-style-st-paragraph-kaiwa.has-very-pale-yellow-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-very-pale-yellow-background-color::after {
	border-right-color: #fffde7;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-very-pale-yellow-background-color::after {
	border-top-color: #fffde7;
}
/* カウント */
.is-style-st-heading-custom-count.has-very-pale-yellow-background-color::before {
	color: #fffde7;
}
/* ステップ */
.is-style-st-heading-custom-step.has-very-pale-yellow-background-color::before {
	color: #fffde7;
}
.is-style-st-heading-custom-step.has-very-pale-yellow-background-color::after {
    border-color: #fffde7;
	color: #fffde7;
}

.is-style-st-paragraph-kaiwa.has-light-green-cyan-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-light-green-cyan-background-color::after {
	border-right-color: #eefaff!important;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-light-green-cyan-background-color::after {
	border-top-color: #eefaff!important;
}
/* カウント */
.is-style-st-heading-custom-count.has-light-green-cyan-background-color::before {
	color: #eefaff!important;
}
/* ステップ */
.is-style-st-heading-custom-step.has-light-green-cyan-background-color::before {
	color: #eefaff!important;
}
.is-style-st-heading-custom-step.has-light-green-cyan-background-color::after {
    border-color: #eefaff!important;
	color: #eefaff!important;
}

.is-style-st-paragraph-kaiwa.has-pale-cyan-blue-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-pale-cyan-blue-background-color::after {
	border-right-color: #8ed1fc;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-pale-cyan-blue-background-color::after {
	border-top-color: #8ed1fc;
}
/* カウント */
.is-style-st-heading-custom-count.has-pale-cyan-blue-background-color::before {
	color: #8ed1fc;
}
/* ステップ */
.is-style-st-heading-custom-step.has-pale-cyan-blue-background-color::before {
	color: #8ed1fc;
}
.is-style-st-heading-custom-step.has-pale-cyan-blue-background-color::after {
    border-color: #8ed1fc;
	color: #8ed1fc;
}

.is-style-st-paragraph-kaiwa.has-vivid-cyan-blue-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-vivid-cyan-blue-background-color::after {
	border-right-color: #0693e3;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-vivid-cyan-blue-background-color::after {
	border-top-color: #0693e3;
}
/* カウント */
.is-style-st-heading-custom-count.has-vivid-cyan-blue-background-color::before {
	color: #0693e3;
}
/* ステップ */
.is-style-st-heading-custom-step.has-vivid-cyan-blue-background-color::before {
	color: #0693e3;
}
.is-style-st-heading-custom-step.has-vivid-cyan-blue-background-color::after {
    border-color: #0693e3;
	color: #0693e3;
}

.is-style-st-paragraph-kaiwa.has-very-light-gray-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-very-light-gray-background-color::after {
	border-right-color: #fafafa;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-very-light-gray-background-color::after {
	border-top-color: #fafafa;
}
/* カウント */
.is-style-st-heading-custom-count.has-very-light-gray-background-color::before {
	color: #fafafa;
}
/* ステップ */
.is-style-st-heading-custom-step.has-very-light-gray-background-color::before {
	color: #fafafa;
}
.is-style-st-heading-custom-step.has-very-light-gray-background-color::after {
    border-color: #fafafa;
	color: #fafafa;
}

.is-style-st-paragraph-kaiwa.has-very-dark-gray-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-very-dark-gray-background-color::after {
	border-right-color: #fafafa;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-very-dark-gray-background-color::after {
	border-top-color: #313131;
}
/* カウント */
.is-style-st-heading-custom-count.has-very-dark-gray-background-color::before {
	color: #313131;
}
/* ステップ */
.is-style-st-heading-custom-step.has-very-dark-gray-background-color::before {
	color: #313131;
}
.is-style-st-heading-custom-step.has-very-dark-gray-background-color::after {
    border-color: #313131;
	color: #313131;
}

.is-style-st-paragraph-kaiwa.has-white-background-color::after,
.is-style-st-paragraph-kaiwa-b.has-white-background-color::after {
	border-right-color: #313131;
}
/* 見出しふきだし */
.is-style-st-heading-custom-bubble.has-white-background-color::after {
	border-top-color: #ffffff;
}
/* カウント */
.is-style-st-heading-custom-count.has-white-background-color::before {
	color: #ffffff;
}
/* ステップ */
.is-style-st-heading-custom-step.has-white-background-color::before {
	color: #ffffff;
}
.is-style-st-heading-custom-step.has-white-background-color::after {
    border-color: #ffffff;
	color: #ffffff;
}

/* カラーパレット（背景色）選択時の会話ふきだし背景色 */
.is-style-st-paragraph-kaiwa.has-pale-pink-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-pale-pink-background-color .st-paragraph-kaiwa-text {
	background-color: #f78da7;
}
.is-style-st-paragraph-kaiwa.has-soft-red-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-soft-red-background-color .st-paragraph-kaiwa-text {
	background-color: #e92f3d;
}
.is-style-st-paragraph-kaiwa.has-light-grayish-red-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-light-grayish-red-background-color .st-paragraph-kaiwa-text {
	background-color: #fdf0f2;
}
.is-style-st-paragraph-kaiwa.has-vivid-yellow-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-vivid-yellow-background-color .st-paragraph-kaiwa-text {
	background-color: #ffc107;
}
.is-style-st-paragraph-kaiwa.has-very-pale-yellow-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-very-pale-yellow-background-color .st-paragraph-kaiwa-text {
	background-color: #fffde7;
}
.is-style-st-paragraph-kaiwa.has-light-green-cyan-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-light-green-cyan-background-color .st-paragraph-kaiwa-text {
	background-color: #eefaff!important;
}
.is-style-st-paragraph-kaiwa.has-pale-cyan-blue-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-pale-cyan-blue-background-color .st-paragraph-kaiwa-text {
	background-color: #8ed1fc;
}
.is-style-st-paragraph-kaiwa.has-vivid-cyan-blue-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-vivid-cyan-blue-background-color .st-paragraph-kaiwa-text {
	background-color: #0693e3;
}
.is-style-st-paragraph-kaiwa.has-very-light-gray-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-very-light-gray-background-color .st-paragraph-kaiwa-text {
	background-color: #fafafa;
}
.is-style-st-paragraph-kaiwa.has-very-dark-gray-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-very-dark-gray-background-color .st-paragraph-kaiwa-text {
	background-color: #313131;
}
.is-style-st-paragraph-kaiwa.has-white-background-color .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-white-background-color .st-paragraph-kaiwa-text {
	background-color: #ffffff;
}

/* カラーパレット（背景色）選択時の会話吹き出し周りの背景色を無しに */
.is-style-st-paragraph-kaiwa.has-pale-pink-background-color,
.is-style-st-paragraph-kaiwa-b.has-pale-pink-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-soft-red-background-color,
.is-style-st-paragraph-kaiwa-b.has-soft-red-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-light-grayish-red-background-color,
.is-style-st-paragraph-kaiwa-b.has-light-grayish-red-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-vivid-yellow-background-color,
.is-style-st-paragraph-kaiwa-b.has-vivid-yellow-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-very-pale-yellow-background-color,
.is-style-st-paragraph-kaiwa-b.has-very-pale-yellow-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-light-green-cyan-background-color,
.is-style-st-paragraph-kaiwa-b.has-light-green-cyan-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-pale-cyan-blue-background-color,
.is-style-st-paragraph-kaiwa-b.has-pale-cyan-blue-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-vivid-cyan-blue-background-color,
.is-style-st-paragraph-kaiwa-b.has-vivid-cyan-blue-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-very-light-gray-background-color,
.is-style-st-paragraph-kaiwa-b.has-very-light-gray-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-very-dark-gray-background-color,
.is-style-st-paragraph-kaiwa-b.has-very-dark-gray-background-color {
	background-color: transparent!important;
}
.is-style-st-paragraph-kaiwa.has-white-background-color,
.is-style-st-paragraph-kaiwa-b.has-white-background-color {
	background-color: transparent!important;
}

/** カラーパレット（文字色）選択時のアイコン */
.is-style-st-paragraph-pen.has-pale-pink-color::before,
.is-style-st-paragraph-memo-txt.has-pale-pink-color::before,
.is-style-st-paragraph-link.has-pale-pink-color::before,
.is-style-st-paragraph-check.has-pale-pink-color::before,
.is-style-st-paragraph-point.has-pale-pink-color::before,
.is-style-st-paragraph-info-circle.has-pale-pink-color::before,
.is-style-st-paragraph-bigginer.has-pale-pink-color::before,
.is-style-st-paragraph-attention.has-pale-pink-color::before,
.is-style-st-paragraph-attention-gray.has-pale-pink-color::before,
.is-style-st-paragraph-circle-o.has-pale-pink-color::before,
.is-style-st-paragraph-times.has-pale-pink-color::before,
.is-style-st-paragraph-thumbs-o-up.has-pale-pink-color::before,
.is-style-st-paragraph-thumbs-o-down.has-pale-pink-color::before,
.is-style-st-paragraph-code.has-pale-pink-color::before {
	color: #f78da7;
	border-right-color: #f78da7!important;
}

.is-style-st-paragraph-pen.has-soft-red-color::before,
.is-style-st-paragraph-memo-txt.has-soft-red-color::before,
.is-style-st-paragraph-link.has-soft-red-color::before,
.is-style-st-paragraph-check.has-soft-red-color::before,
.is-style-st-paragraph-point.has-soft-red-color::before,
.is-style-st-paragraph-info-circle.has-soft-red-color::before,
.is-style-st-paragraph-bigginer.has-soft-red-color::before,
.is-style-st-paragraph-attention.has-soft-red-color::before,
.is-style-st-paragraph-attention-gray.has-soft-red-color::before,
.is-style-st-paragraph-circle-o.has-soft-red-color::before,
.is-style-st-paragraph-times.has-soft-red-color::before,
.is-style-st-paragraph-thumbs-o-up.has-soft-red-color::before,
.is-style-st-paragraph-thumbs-o-down.has-soft-red-color::before,
.is-style-st-paragraph-code.has-soft-red-color::before {
	color: #e92f3d;
	border-right-color: #e92f3d!important;
}

.is-style-st-paragraph-pen.has-light-grayish-red-color::before,
.is-style-st-paragraph-memo-txt.has-light-grayish-red-color::before,
.is-style-st-paragraph-link.has-light-grayish-red-color::before,
.is-style-st-paragraph-check.has-light-grayish-red-color::before,
.is-style-st-paragraph-point.has-light-grayish-red-color::before,
.is-style-st-paragraph-info-circle.has-light-grayish-red-color::before,
.is-style-st-paragraph-bigginer.has-light-grayish-red-color::before,
.is-style-st-paragraph-attention.has-light-grayish-red-color::before,
.is-style-st-paragraph-attention-gray.has-light-grayish-red-color::before,
.is-style-st-paragraph-circle-o.has-light-grayish-red-color::before,
.is-style-st-paragraph-times.has-light-grayish-red-color::before,
.is-style-st-paragraph-thumbs-o-up.has-light-grayish-red-color::before,
.is-style-st-paragraph-thumbs-o-down.has-light-grayish-red-color::before,
.is-style-st-paragraph-code.has-light-grayish-red-color::before {
	color: #fdf0f2;
	border-right-color: #fdf0f2!important;
}

.is-style-st-paragraph-pen.has-vivid-yellow-color::before,
.is-style-st-paragraph-memo-txt.has-vivid-yellow-color::before,
.is-style-st-paragraph-link.has-vivid-yellow-color::before,
.is-style-st-paragraph-check.has-vivid-yellow-color::before,
.is-style-st-paragraph-point.has-vivid-yellow-color::before,
.is-style-st-paragraph-info-circle.has-vivid-yellow-color::before,
.is-style-st-paragraph-bigginer.has-vivid-yellow-color::before,
.is-style-st-paragraph-attention.has-vivid-yellow-color::before,
.is-style-st-paragraph-attention-gray.has-vivid-yellow-color::before,
.is-style-st-paragraph-circle-o.has-vivid-yellow-color::before,
.is-style-st-paragraph-times.has-vivid-yellow-color::before,
.is-style-st-paragraph-thumbs-o-up.has-vivid-yellow-color::before,
.is-style-st-paragraph-thumbs-o-down.has-vivid-yellow-color::before,
.is-style-st-paragraph-code.has-vivid-yellow-color::before {
	color: #ffc107;
	border-right-color: #ffc107!important;
}

.is-style-st-paragraph-pen.has-very-pale-yellow-color::before,
.is-style-st-paragraph-memo-txt.has-very-pale-yellow-color::before,
.is-style-st-paragraph-link.has-very-pale-yellow-color::before,
.is-style-st-paragraph-check.has-very-pale-yellow-color::before,
.is-style-st-paragraph-point.has-very-pale-yellow-color::before,
.is-style-st-paragraph-info-circle.has-very-pale-yellow-color::before,
.is-style-st-paragraph-bigginer.has-very-pale-yellow-color::before,
.is-style-st-paragraph-attention.has-very-pale-yellow-color::before,
.is-style-st-paragraph-attention-gray.has-very-pale-yellow-color::before,
.is-style-st-paragraph-circle-o.has-very-pale-yellow-color::before,
.is-style-st-paragraph-times.has-very-pale-yellow-color::before,
.is-style-st-paragraph-thumbs-o-up.has-very-pale-yellow-color::before,
.is-style-st-paragraph-thumbs-o-down.has-very-pale-yellow-color::before,
.is-style-st-paragraph-code.has-very-pale-yellow-color::before {
	color: #fffde7;
	border-right-color: #fffde7!important;
}

.is-style-st-paragraph-pen.has-light-green-cyan-color::before,
.is-style-st-paragraph-memo-txt.has-light-green-cyan-color::before,
.is-style-st-paragraph-link.has-light-green-cyan-color::before,
.is-style-st-paragraph-check.has-light-green-cyan-color::before,
.is-style-st-paragraph-point.has-light-green-cyan-color::before,
.is-style-st-paragraph-info-circle.has-light-green-cyan-color::before,
.is-style-st-paragraph-bigginer.has-light-green-cyan-color::before,
.is-style-st-paragraph-attention.has-light-green-cyan-color::before,
.is-style-st-paragraph-attention-gray.has-light-green-cyan-color::before,
.is-style-st-paragraph-circle-o.has-light-green-cyan-color::before,
.is-style-st-paragraph-times.has-light-green-cyan-color::before,
.is-style-st-paragraph-thumbs-o-up.has-light-green-cyan-color::before,
.is-style-st-paragraph-thumbs-o-down.has-light-green-cyan-color::before,
.is-style-st-paragraph-code.has-light-green-cyan-color::before {
	color: #eefaff!important;
	border-right-color: #eefaff!important;
}

.is-style-st-paragraph-pen.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-memo-txt.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-link.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-check.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-point.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-info-circle.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-bigginer.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-attention.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-attention-gray.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-circle-o.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-times.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-thumbs-o-up.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-thumbs-o-down.has-pale-cyan-blue-color::before,
.is-style-st-paragraph-code.has-pale-cyan-blue-color::before {
	color: #8ed1fc;
	border-right-color: #8ed1fc!important;
}

.is-style-st-paragraph-pen.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-memo-txt.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-link.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-check.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-point.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-info-circle.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-bigginer.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-attention.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-attention-gray.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-circle-o.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-times.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-thumbs-o-up.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-thumbs-o-down.has-vivid-cyan-blue-color::before,
.is-style-st-paragraph-code.has-vivid-cyan-blue-color::before {
	color: #0693e3;
	border-right-color: #0693e3!important;
}

.is-style-st-paragraph-pen.has-very-light-gray-color::before,
.is-style-st-paragraph-memo-txt.has-very-light-gray-color::before,
.is-style-st-paragraph-link.has-very-light-gray-color::before,
.is-style-st-paragraph-check.has-very-light-gray-color::before,
.is-style-st-paragraph-point.has-very-light-gray-color::before,
.is-style-st-paragraph-info-circle.has-very-light-gray-color::before,
.is-style-st-paragraph-bigginer.has-very-light-gray-color::before,
.is-style-st-paragraph-attention.has-very-light-gray-color::before,
.is-style-st-paragraph-attention-gray.has-very-light-gray-color::before,
.is-style-st-paragraph-circle-o.has-very-light-gray-color::before,
.is-style-st-paragraph-times.has-very-light-gray-color::before,
.is-style-st-paragraph-thumbs-o-up.has-very-light-gray-color::before,
.is-style-st-paragraph-thumbs-o-down.has-very-light-gray-color::before,
.is-style-st-paragraph-code.has-very-light-gray-color::before {
	color: #fafafa;
	border-right-color: #fafafa!important;
}

.is-style-st-paragraph-pen.has-very-dark-gray-color::before,
.is-style-st-paragraph-memo-txt.has-very-dark-gray-color::before,
.is-style-st-paragraph-link.has-very-dark-gray-color::before,
.is-style-st-paragraph-check.has-very-dark-gray-color::before,
.is-style-st-paragraph-point.has-very-dark-gray-color::before,
.is-style-st-paragraph-info-circle.has-very-dark-gray-color::before,
.is-style-st-paragraph-bigginer.has-very-dark-gray-color::before,
.is-style-st-paragraph-attention.has-very-dark-gray-color::before,
.is-style-st-paragraph-attention-gray.has-very-dark-gray-color::before,
.is-style-st-paragraph-circle-o.has-very-dark-gray-color::before,
.is-style-st-paragraph-times.has-very-dark-gray-color::before,
.is-style-st-paragraph-thumbs-o-up.has-very-dark-gray-color::before,
.is-style-st-paragraph-thumbs-o-down.has-very-dark-gray-color::before,
.is-style-st-paragraph-code.has-very-dark-gray-color::before {
	color: #313131;
	border-right-color: #313131!important;
}

.is-style-st-paragraph-pen.has-white-color::before,
.is-style-st-paragraph-memo-txt.has-white-color::before,
.is-style-st-paragraph-link.has-white-color::before,
.is-style-st-paragraph-check.has-white-color::before,
.is-style-st-paragraph-point.has-white-color::before,
.is-style-st-paragraph-info-circle.has-white-color::before,
.is-style-st-paragraph-bigginer.has-white-color::before,
.is-style-st-paragraph-attention.has-white-color::before,
.is-style-st-paragraph-attention-gray.has-white-color::before,
.is-style-st-paragraph-circle-o.has-white-color::before,
.is-style-st-paragraph-times.has-white-color::before,
.is-style-st-paragraph-thumbs-o-up.has-white-color::before,
.is-style-st-paragraph-thumbs-o-down.has-white-color::before,
.is-style-st-paragraph-code.has-white-color::before {
	color: #ffffff;
	border-right-color: #ffffff!important;
}

/** カラーパレット選択時のbox-shadow */
.is-style-st-paragraph-dotline.has-pale-pink-background-color {
	box-shadow: 0px 0px 0px 7px #f78da7;
}

.is-style-st-paragraph-dotline.has-soft-red-background-color {
	box-shadow: 0px 0px 0px 7px #e92f3d;
}

.is-style-st-paragraph-dotline.has-light-grayish-red-background-color {
	box-shadow: 0px 0px 0px 7px #fdf0f2;
}

.is-style-st-paragraph-dotline.has-vivid-yellow-background-color {
	box-shadow: 0px 0px 0px 7px #ffc107;
}

.is-style-st-paragraph-dotline.has-very-pale-yellow-background-color {
	box-shadow: 0px 0px 0px 7px #fffde7;
}

.is-style-st-paragraph-dotline.has-light-green-cyan-background-color {
	box-shadow: 0px 0px 0px 7px #eefaff!important;
}

.is-style-st-paragraph-dotline.has-pale-cyan-blue-background-color {
	box-shadow: 0px 0px 0px 7px #8ed1fc;
}

.is-style-st-paragraph-dotline.has-vivid-cyan-blue-background-color {
	box-shadow: 0px 0px 0px 7px #0693e3;
}

.is-style-st-paragraph-dotline.has-very-light-gray-background-color {
	box-shadow: 0px 0px 0px 7px #fafafa;
}

.is-style-st-paragraph-dotline.has-very-dark-gray-background-color {
	box-shadow: 0px 0px 0px 7px #313131;
}

.is-style-st-paragraph-dotline.has-white-background-color {
	box-shadow: 0px 0px 0px 7px #ffffff;
}


/* カラーパレット選択時の吹き出し */
.is-style-st-paragraph-bubble.has-pale-pink-background-color::after {
	border-top-color: #f78da7;
}

.is-style-st-paragraph-bubble.has-soft-red-background-color::after {
	border-top-color: #e92f3d;
}

.is-style-st-paragraph-bubble.has-light-grayish-red-background-color::after {
	border-top-color: #fdf0f2;
}

.is-style-st-paragraph-bubble.has-vivid-yellow-background-color::after {
	border-top-color: #ffc107;
}

.is-style-st-paragraph-bubble.has-very-pale-yellow-background-color::after {
	border-top-color: #fffde7;
}

.is-style-st-paragraph-bubble.has-light-green-cyan-background-color::after {
	border-top-color: #eefaff!important;
}

.is-style-st-paragraph-bubble.has-pale-cyan-blue-background-color::after {
	border-top-color: #8ed1fc;
}

.is-style-st-paragraph-bubble.has-vivid-cyan-blue-background-color::after {
	border-top-color: #0693e3;
}

.is-style-st-paragraph-bubble.has-very-light-gray-background-color::after {
	border-top-color: #fafafa;
}

.is-style-st-paragraph-bubble.has-very-dark-gray-background-color::after {
	border-top-color: #313131;
}

.is-style-st-paragraph-bubble.has-white-background-color::after {
	border-top-color: #ffffff;
}

/* オリジナルパレット */
	.has-original-color-a-color.is-style-st-heading-custom-attention::before,
	.has-original-color-a-color.is-style-st-heading-custom-check::before,
	.has-original-color-a-color {
		color: #43a047 !important;
	}
	.has-original-color-a-background-color {
		background-color: #43a047 !important;
	}
	.has-original-color-a-border-color {
		border-color: #43a047 !important;
	}
	.is-style-st-paragraph-pen.has-original-color-a-color::before,
	.is-style-st-paragraph-memo-txt.has-original-color-a-color::before,
	.is-style-st-paragraph-link.has-original-color-a-color::before,
	.is-style-st-paragraph-check.has-original-color-a-color::before,
	.is-style-st-paragraph-point.has-original-color-a-color::before,
	.is-style-st-paragraph-info-circle.has-original-color-a-color::before,
	.is-style-st-paragraph-bigginer.has-original-color-a-color::before,
	.is-style-st-paragraph-attention.has-original-color-a-color::before,
	.is-style-st-paragraph-attention-gray.has-original-color-a-color::before,
	.is-style-st-paragraph-circle-o.has-original-color-a-color::before,
	.is-style-st-paragraph-times.has-original-color-a-color::before,
	.is-style-st-paragraph-thumbs-o-up.has-original-color-a-color::before,
	.is-style-st-paragraph-thumbs-o-down.has-original-color-a-color::before,
	.is-style-st-paragraph-code.has-original-color-a-color::before {
		color: #43a047;
		border-right-color: #43a047!important;
	}
	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa.has-original-color-a-background-color .st-paragraph-kaiwa-text,
	.is-style-st-paragraph-kaiwa-b.has-original-color-a-background-color .st-paragraph-kaiwa-text {
		background-color: #43a047;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-a-background-color::after,
	.is-style-st-paragraph-kaiwa-b.has-original-color-a-background-color::after {
		border-right-color: #43a047;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-a-background-color,
	.is-style-st-paragraph-kaiwa-b.has-original-color-a-background-color {
		background-color: transparent!important;
	}
	/* 見出しアイコン */
	[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-original-color-a-color::before {
		color: #43a047;
	}
	/* 見出しふきだし */
	.is-style-st-heading-custom-bubble.has-original-color-a-background-color::after {
		border-top-color: #43a047;
	}
	/* 見出しライン */
	.is-style-st-heading-custom-line.has-original-color-a-color::after {
		background-color: #43a047;
	}
	/* カウント */
	.is-style-st-heading-custom-count.has-original-color-a-color {
		color: #43a047;
	}
	.is-style-st-heading-custom-count.has-original-color-a-background-color::before {
		color: #43a047;
	}
	/* ステップ */
	.is-style-st-heading-custom-step.has-original-color-a-background-color::before {
		color: #43a047;
	}
	.is-style-st-heading-custom-step.has-original-color-a-background-color::after {
		border-color: #43a047;
		color: #43a047;
	}
	/* 質問と答え */
	.is-style-st-heading-custom-question.has-original-color-a-color::before,
	.is-style-st-heading-custom-answer.has-original-color-a-color::before {
		color: #43a047;
	}
	.is-style-st-heading-custom-question.has-original-color-a-background-color::before,
	.is-style-st-heading-custom-answer.has-original-color-a-background-color::before {
		background-color: #43a047;
	}
	/* ランキング */
	.is-style-st-heading-custom-ranking.has-original-color-a-background-color::before {
		background-color: #43a047;
		color: #fff!important;
	}
	/* グループ ライン */
	.is-style-st-group-line-bold.has-original-color-a-color,
	.is-style-st-group-line.has-original-color-a-color {
		border-left-color: #43a047;
		color: inherit;
	}
	/* グループ かぎ括弧, 角括弧 */
	.is-style-st-group-corner-brackets.has-original-color-a-color::before,
	.is-style-st-group-corner-brackets.has-original-color-a-color::after,
	.is-style-st-group-square-brackets.has-original-color-a-color::before,
	.is-style-st-group-square-brackets.has-original-color-a-color::after {
		border-color: #43a047;
	}
	/* タブ > タブブロック > ブロックスタイル: ふきだし */
	.st-tabs.is-style-st-bubble .has-border.has-original-color-a-border-color .st-tabs__tab[aria-selected="true"]::before,
	.st-tabs.is-style-st-bubble .has-original-color-a-background-color .st-tabs__tab[aria-selected="true"]::after {
		border-top-color: #43a047;
	}

	.has-original-color-b-color.is-style-st-heading-custom-attention::before,
	.has-original-color-b-color.is-style-st-heading-custom-check::before,
	.has-original-color-b-color {
		color: #795548 !important;
	}
	.has-original-color-b-background-color {
		background-color: #795548 !important;
	}
	.has-original-color-b-border-color {
		border-color: #795548 !important;
	}
	.is-style-st-paragraph-pen.has-original-color-b-color::before,
	.is-style-st-paragraph-memo-txt.has-original-color-b-color::before,
	.is-style-st-paragraph-link.has-original-color-b-color::before,
	.is-style-st-paragraph-check.has-original-color-b-color::before,
	.is-style-st-paragraph-point.has-original-color-b-color::before,
	.is-style-st-paragraph-info-circle.has-original-color-b-color::before,
	.is-style-st-paragraph-bigginer.has-original-color-b-color::before,
	.is-style-st-paragraph-attention.has-original-color-b-color::before,
	.is-style-st-paragraph-attention-gray.has-original-color-b-color::before,
	.is-style-st-paragraph-circle-o.has-original-color-b-color::before,
	.is-style-st-paragraph-times.has-original-color-b-color::before,
	.is-style-st-paragraph-thumbs-o-up.has-original-color-b-color::before,
	.is-style-st-paragraph-thumbs-o-down.has-original-color-b-color::before,
	.is-style-st-paragraph-code.has-original-color-b-color::before {
		color: #795548;
		border-right-color: #795548!important;
	}
	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa.has-original-color-b-background-color .st-paragraph-kaiwa-text,
	.is-style-st-paragraph-kaiwa-b.has-original-color-b-background-color .st-paragraph-kaiwa-text {
		background-color: #795548;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-b-background-color::after,
	.is-style-st-paragraph-kaiwa-b.has-original-color-b-background-color::after {
		border-right-color: #795548;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-b-background-color,
	.is-style-st-paragraph-kaiwa-b.has-original-color-b-background-color {
		background-color: transparent!important;
	}
	/* 見出しアイコン */
	[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-original-color-b-color::before {
		color: #795548;
	}
	/* 見出しふきだし */
	.is-style-st-heading-custom-bubble.has-original-color-b-background-color::after {
		border-top-color: #795548;
	}
	/* 見出しライン */
	.is-style-st-heading-custom-line.has-original-color-b-color::after {
		background-color: #795548;
	}
	/* カウント */
	.is-style-st-heading-custom-count.has-original-color-b-color {
		color: #795548;
	}
	.is-style-st-heading-custom-count.has-original-color-b-background-color::before {
		color: #795548;
	}
	/* ステップ */
	.is-style-st-heading-custom-step.has-original-color-b-background-color::before {
		color: #795548;
	}
	.is-style-st-heading-custom-step.has-original-color-b-background-color::after {
		border-color: #795548;
		color: #795548;
	}
	/* 質問と答え */
	.is-style-st-heading-custom-question.has-original-color-b-color::before,
	.is-style-st-heading-custom-answer.has-original-color-b-color::before {
		color: #795548;
	}
	.is-style-st-heading-custom-question.has-original-color-b-background-color::before,
	.is-style-st-heading-custom-answer.has-original-color-b-background-color::before {
		background-color: #795548;
	}
	/* ランキング */
	.is-style-st-heading-custom-ranking.has-original-color-b-background-color::before {
		background-color: #795548;
		color: #fff!important;
	}
	/* グループ ライン */
	.is-style-st-group-line-bold.has-original-color-b-color,
	.is-style-st-group-line.has-original-color-b-color {
		border-left-color: #795548;
		color: inherit;
	}
	/* グループ かぎ括弧, 角括弧 */
	.editor-styles-wrapper .is-style-st-group-corner-brackets.has-original-color-b-color::before,
	.editor-styles-wrapper .is-style-st-group-corner-brackets.has-original-color-b-color::after,
	.editor-styles-wrapper .is-style-st-group-square-brackets.has-original-color-b-color::before,
	.editor-styles-wrapper .is-style-st-group-square-brackets.has-original-color-b-color::after {
		border-color: #795548;
	}
	/* グループ かぎ括弧, 角括弧 */
	.is-style-st-group-corner-brackets.has-original-color-b-color,
	.is-style-st-group-square-brackets.has-original-color-b-color {
		color: inherit!important;
	}
	.is-style-st-group-corner-brackets.has-original-color-b-color::before,
	.is-style-st-group-corner-brackets.has-original-color-b-color::after,
	.is-style-st-group-square-brackets.has-original-color-b-color::before,
	.is-style-st-group-square-brackets.has-original-color-b-color::after {
		border-color: #795548;
	}
	/* タブ > タブブロック > ブロックスタイル: ふきだし */
	.st-tabs.is-style-st-bubble .has-border.has-original-color-b-border-color .st-tabs__tab[aria-selected="true"]::before,
	.st-tabs.is-style-st-bubble .has-original-color-b-background-color .st-tabs__tab[aria-selected="true"]::after {
		border-top-color: #795548;
	}

	.has-original-color-c-color.is-style-st-heading-custom-attention::before,
	.has-original-color-c-color.is-style-st-heading-custom-check::before,
	.has-original-color-c-color {
		color: #ec407a !important;
	}
	.has-original-color-c-background-color {
		background-color: #ec407a !important;
	}
	.has-original-color-c-border-color {
		border-color: #ec407a !important;
	}
	.is-style-st-paragraph-pen.has-original-color-c-color::before,
	.is-style-st-paragraph-memo-txt.has-original-color-c-color::before,
	.is-style-st-paragraph-link.has-original-color-c-color::before,
	.is-style-st-paragraph-check.has-original-color-c-color::before,
	.is-style-st-paragraph-point.has-original-color-c-color::before,
	.is-style-st-paragraph-info-circle.has-original-color-c-color::before,
	.is-style-st-paragraph-bigginer.has-original-color-c-color::before,
	.is-style-st-paragraph-attention.has-original-color-c-color::before,
	.is-style-st-paragraph-attention-gray.has-original-color-c-color::before,
	.is-style-st-paragraph-circle-o.has-original-color-c-color::before,
	.is-style-st-paragraph-times.has-original-color-c-color::before,
	.is-style-st-paragraph-thumbs-o-up.has-original-color-c-color::before,
	.is-style-st-paragraph-thumbs-o-down.has-original-color-c-color::before,
	.is-style-st-paragraph-code.has-original-color-c-color::before {
		color: #ec407a;
		border-right-color: #ec407a!important;
	}
	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa.has-original-color-c-background-color .st-paragraph-kaiwa-text,
	.is-style-st-paragraph-kaiwa-b.has-original-color-c-background-color .st-paragraph-kaiwa-text {
		background-color: #ec407a;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-c-background-color::after,
	.is-style-st-paragraph-kaiwa-b.has-original-color-c-background-color::after {
		border-right-color: #ec407a;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-c-background-color,
	.is-style-st-paragraph-kaiwa-b.has-original-color-c-background-color {
		background-color: transparent!important;
	}
	/* 見出しアイコン */
	[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-original-color-c-color::before {
		color: #ec407a;
	}
	/* 見出しふきだし */
	.is-style-st-heading-custom-bubble.has-original-color-c-background-color::after {
		border-top-color: #ec407a;
	}
	/* 見出しライン */
	.is-style-st-heading-custom-line.has-original-color-c-color::after {
		background-color: #ec407a;
	}
	/* カウント */
	.is-style-st-heading-custom-count.has-original-color-c-color {
		color: #ec407a;
	}
	.is-style-st-heading-custom-count.has-original-color-c-background-color::before {
		color: #ec407a;
	}
	/* ステップ */
	.is-style-st-heading-custom-step.has-original-color-c-background-color::before {
		color: #ec407a;
	}
	.is-style-st-heading-custom-step.has-original-color-c-background-color::after {
		border-color: #ec407a;
		color: #ec407a;
	}
	/* 質問と答え */
	.is-style-st-heading-custom-question.has-original-color-c-color::before,
	.is-style-st-heading-custom-answer.has-original-color-c-color::before {
		color: #ec407a;
	}
	.is-style-st-heading-custom-question.has-original-color-c-background-color::before,
	.is-style-st-heading-custom-answer.has-original-color-c-background-color::before {
		background-color: #ec407a;
	}
	/* ランキング */
	.is-style-st-heading-custom-ranking.has-original-color-c-background-color::before {
		background-color: #ec407a;
		color: #fff!important;
	}
	/* グループ ライン */
	.is-style-st-group-line-bold.has-original-color-c-color,
	.is-style-st-group-line.has-original-color-c-color {
		border-left-color: #ec407a;
		color: inherit;
	}
	/* グループ かぎ括弧, 角括弧 */
	.is-style-st-group-corner-brackets.has-original-color-c-color::before,
	.is-style-st-group-corner-brackets.has-original-color-c-color::after,
	.is-style-st-group-square-brackets.has-original-color-c-color::before,
	.is-style-st-group-square-brackets.has-original-color-c-color::after {
		border-color: #ec407a;
	}
	.st-tabs.is-style-st-bubble .has-border.has-original-color-c-border-color .st-tabs__tab[aria-selected="true"]::before,
	.st-tabs.is-style-st-bubble .has-original-color-c-background-color .st-tabs__tab[aria-selected="true"]::after {
		border-top-color: #ec407a;
	}

	.has-original-color-d-color.is-style-st-heading-custom-attention::before,
	.has-original-color-d-color.is-style-st-heading-custom-check::before,
	.has-original-color-d-color {
		color: #fc9d9d !important;
	}
	.has-original-color-d-background-color {
		background-color: #fc9d9d !important;
	}
	.has-original-color-d-border-color {
		border-color: #fc9d9d !important;
	}
	.is-style-st-paragraph-pen.has-original-color-d-color::before,
	.is-style-st-paragraph-memo-txt.has-original-color-d-color::before,
	.is-style-st-paragraph-link.has-original-color-d-color::before,
	.is-style-st-paragraph-check.has-original-color-d-color::before,
	.is-style-st-paragraph-point.has-original-color-d-color::before,
	.is-style-st-paragraph-info-circle.has-original-color-d-color::before,
	.is-style-st-paragraph-bigginer.has-original-color-d-color::before,
	.is-style-st-paragraph-attention.has-original-color-d-color::before,
	.is-style-st-paragraph-attention-gray.has-original-color-d-color::before,
	.is-style-st-paragraph-circle-o.has-original-color-d-color::before,
	.is-style-st-paragraph-times.has-original-color-d-color::before,
	.is-style-st-paragraph-thumbs-o-up.has-original-color-d-color::before,
	.is-style-st-paragraph-thumbs-o-down.has-original-color-d-color::before,
	.is-style-st-paragraph-code.has-original-color-d-color::before {
		color: #fc9d9d;
		border-right-color: #fc9d9d!important;
	}
	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa.has-original-color-d-background-color .st-paragraph-kaiwa-text,
	.is-style-st-paragraph-kaiwa-b.has-original-color-d-background-color .st-paragraph-kaiwa-text {
		background-color: #fc9d9d;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-d-background-color::after,
	.is-style-st-paragraph-kaiwa-b.has-original-color-d-background-color::after {
		border-right-color: #fc9d9d;
	}
	.is-style-st-paragraph-kaiwa.has-original-color-d-background-color,
	.is-style-st-paragraph-kaiwa-b.has-original-color-d-background-color {
		background-color: transparent!important;
	}
	/* 見出しアイコン */
	[class^="is-style-st-heading-custom-"]:not(.is-style-st-heading-custom-bubble):not(.is-style-st-heading-custom-step):not(.is-style-st-heading-custom-count).has-original-color-d-color::before {
		color: #fc9d9d;
	}
	/* 見出しふきだし */
	.is-style-st-heading-custom-bubble.has-original-color-d-background-color::after {
		border-top-color: #fc9d9d;
	}
	/* 見出しライン */
	.is-style-st-heading-custom-line.has-original-color-d-color::after {
		background-color: #fc9d9d;
	}
	/* カウント */
	.is-style-st-heading-custom-count.has-original-color-d-color {
		color: #fc9d9d;
	}
	.is-style-st-heading-custom-count.has-original-color-d-background-color::before {
		color: #fc9d9d;
	}
	/* ステップ */
	.is-style-st-heading-custom-step.has-original-color-d-background-color::before {
		color: #fc9d9d;
	}
	.is-style-st-heading-custom-step.has-original-color-d-background-color::after {
		border-color: #fc9d9d;
		color: #fc9d9d;
	}
	/* 質問と答え */
	.is-style-st-heading-custom-question.has-original-color-d-color::before,
	.is-style-st-heading-custom-answer.has-original-color-d-color::before {
		color: #fc9d9d;
	}
	.is-style-st-heading-custom-question.has-original-color-d-background-color::before,
	.is-style-st-heading-custom-answer.has-original-color-d-background-color::before {
		background-color: #fc9d9d;
	}
	/* ランキング */
	.is-style-st-heading-custom-ranking.has-original-color-d-background-color::before {
		background-color: #fc9d9d;
		color: #fff!important;
	}
	/* グループ ライン */
	.is-style-st-group-line-bold.has-original-color-d-color,
	.is-style-st-group-line.has-original-color-d-color {
		border-left-color: #fc9d9d;
		color: inherit;
	}
	/* グループ かぎ括弧, 角括弧 */
	.is-style-st-group-corner-brackets.has-original-color-d-color::before,
	.is-style-st-group-corner-brackets.has-original-color-d-color::after,
	.is-style-st-group-square-brackets.has-original-color-d-color::before,
	.is-style-st-group-square-brackets.has-original-color-d-color::after {
		border-color: #fc9d9d;
	}
	.st-tabs.is-style-st-bubble .has-border.has-original-color-d-border-color .st-tabs__tab[aria-selected="true"]::before,
	.st-tabs.is-style-st-bubble .has-original-color-d-background-color .st-tabs__tab[aria-selected="true"]::after {
		border-top-color: #fc9d9d;
	}

/* カラーパレット選択時の見出し（質問と答え） */
.is-style-st-heading-custom-question.has-pale-pink-background-color::before,
.is-style-st-heading-custom-answer.has-pale-pink-background-color::before {
	background-color: #f78da7;
}

.is-style-st-heading-custom-question.has-soft-red-background-color::before,
.is-style-st-heading-custom-answer.has-soft-red-background-color::before {
	background-color: #e92f3d;
}

.is-style-st-heading-custom-question.has-light-grayish-red-background-color::before,
.is-style-st-heading-custom-answer.has-light-grayish-red-background-color::before {
	background-color: #fdf0f2;
}

.is-style-st-heading-custom-question.has-vivid-yellow-background-color::before,
.is-style-st-heading-custom-answer.has-vivid-yellow-background-color::before {
	background-color: #ffc107;
}

.is-style-st-heading-custom-question.has-very-pale-yellow-background-color::before,
.is-style-st-heading-custom-answer.has-very-pale-yellow-background-color::before {
	background-color: #fffde7;
}

.is-style-st-heading-custom-question.has-light-green-cyan-background-color::before ,
.is-style-st-heading-custom-answer.has-light-green-cyan-background-color::before {
	background-color: #eefaff!important;
}

.is-style-st-heading-custom-question.has-pale-cyan-blue-background-color::before,
.is-style-st-heading-custom-answer.has-pale-cyan-blue-background-color::before {
	background-color: #8ed1fc;
}

.is-style-st-heading-custom-question.has-vivid-cyan-blue-background-color::before,
.is-style-st-heading-custom-answer.has-vivid-cyan-blue-background-color::before {
	background-color: #0693e3;
}

.is-style-st-heading-custom-question.has-very-light-gray-background-color::before,
.is-style-st-heading-custom-answer.has-very-light-gray-background-color::before {
	background-color: #fafafa;
}

.is-style-st-heading-custom-question.has-very-dark-gray-background-color::before,
.is-style-st-heading-custom-answer.has-very-dark-gray-background-color::before {
	background-color: #313131;
}

.is-style-st-heading-custom-question.has-white-background-color::before,
.is-style-st-heading-custom-answer.has-white-background-color::before {
	background-color: #ffffff;
}

/* カラーパレット選択時の見出し（ランキング） */
.is-style-st-heading-custom-ranking.has-pale-pink-background-color::before {
	background-color: #f78da7;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-soft-red-background-color::before {
	background-color: #e92f3d;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-light-grayish-red-background-color::before {
	background-color: #fdf0f2;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-vivid-yellow-background-color::before {
	background-color: #ffc107;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-very-pale-yellow-background-color::before {
	background-color: #fffde7;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-light-green-cyan-background-color::before {
	background-color: #eefaff!important;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-pale-cyan-blue-background-color::before {
	background-color: #8ed1fc;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-vivid-cyan-blue-background-color::before {
	background-color: #0693e3;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-very-light-gray-background-color::before {
	background-color: #fafafa;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-very-dark-gray-background-color::before {
	background-color: #313131;
	color: #fff!important;
}

.is-style-st-heading-custom-ranking.has-white-background-color::before {
	background-color: #ffffff;
	color: #fff!important;
}

/* マイ細マーカー */
.st-mymarker-s {
			background:linear-gradient(transparent 70%,#FFF9C4 0%);
		font-weight:bold;
	}
.st-mymarker-s-b {
			background:linear-gradient(transparent 70%,#fc9d9d 0%);
		font-weight:bold;
	}

/*--------------------------------
ブロックスタイル ボーダー設定
---------------------------------*/
.has-st-border {
}

/*--------------------------------
ブロックスタイル 段落
---------------------------------*/
	/* 基本 */
	[class^="is-style-st-paragraph-"],
	[class*=" is-style-st-paragraph-"] {
		border-radius: 5px;
	}

/* カスタム */


/* メモ */


/* リンク */


/* チェック */


/* ポイント */


/* インフォ */


/* 初心者 */


/* 注意 */


/* マル */


/* バツ */


/* Like */


/* Bad */


/* Code */


/* 簡易会話ふきだし */
.is-style-st-paragraph-kaiwa.has-st-border,
.is-style-st-paragraph-kaiwa-b.has-st-border {
	border: none;
	border-radius: 0;
}

.is-style-st-paragraph-kaiwa.has-st-border .st-paragraph-kaiwa-text,
.is-style-st-paragraph-kaiwa-b.has-st-border .st-paragraph-kaiwa-text{
}


.is-style-st-paragraph-kaiwa::before {
	background-image: url(https://kakinblog.com/wp-content/uploads/2020/05/haa111.jpg);
}

.is-style-st-paragraph-kaiwa-b::before {
	background-image: url(https://kakinblog.com/wp-content/themes/affinger/images/no-img.png);
}

/* 簡易ボタン */


	/* 囲みドット
	 * ふきだし
	 */
	.is-style-st-paragraph-dotline,
	.is-style-st-paragraph-dotline::before
	.is-style-st-paragraph-bubble {
		border-radius: 5px;
	}

/* カラーパレット選択時の囲みドット */
	.is-style-st-paragraph-dotline.has-original-color-a-background-color {
		box-shadow: 0px 0px 0px 7px #43a047;
	}

	.is-style-st-paragraph-dotline.has-original-color-b-background-color {
		box-shadow: 0px 0px 0px 7px #795548;
	}

	.is-style-st-paragraph-dotline.has-original-color-c-background-color {
		box-shadow: 0px 0px 0px 7px #ec407a;
	}

	.is-style-st-paragraph-dotline.has-original-color-d-background-color {
		box-shadow: 0px 0px 0px 7px #fc9d9d;
	}

/* カラーパレット選択時の吹き出し */
	.is-style-st-paragraph-bubble.has-original-color-a-background-color::after {
		border-top-color: #43a047;
	}

	.is-style-st-paragraph-bubble.has-original-color-b-background-color::after {
		border-top-color: #795548;
	}

	.is-style-st-paragraph-bubble.has-original-color-c-background-color::after {
		border-top-color: #ec407a;
	}

	.is-style-st-paragraph-bubble.has-original-color-d-background-color::after {
		border-top-color: #fc9d9d;
	}


	/* まるもじ */
	.is-style-st-paragraph-marumozi {
		border-radius: 30px!important;
	}

/*--------------------------------
ブロックスタイル グループ
---------------------------------*/
/* 囲みドット */
.is-style-st-group-dotline,
.is-style-st-group-dotline::before {
	border-radius: 5px;
}

/* ライン */
.is-style-st-group-line.has-pale-pink-color,
.is-style-st-group-line-bold.has-pale-pink-color {
	border-left-color: #f78da7;
	color: inherit;
}

.is-style-st-group-line.has-soft-red-color,
.is-style-st-group-line-bold.has-soft-red-color {
	border-left-color: #e92f3d;
	color: inherit;
}

.is-style-st-group-line.has-light-grayish-red-color,
.is-style-st-group-line-bold.has-light-grayish-red-color {
	border-left-color: #fdf0f2;
	color: inherit;
}

.is-style-st-group-line.has-vivid-yellow-color,
.is-style-st-group-line-bold.has-vivid-yellow-color {
	border-left-color: #ffc107;
	color: inherit;
}

.is-style-st-group-line.has-very-pale-yellow-color,
.is-style-st-group-line-bold.has-very-pale-yellow-color {
	border-left-color: #fffde7;
	color: inherit;
}

.is-style-st-group-line.has-light-green-cyan-color,
.is-style-st-group-line-bold.has-light-green-cyan-color {
	border-left-color: #eefaff!important;
	color: inherit;
}

.is-style-st-group-line.has-pale-cyan-blue-color,
.is-style-st-group-line-bold.has-pale-cyan-blue-color {
	border-left-color: #8ed1fc;
	color: inherit;
}

.is-style-st-group-line.has-vivid-cyan-blue-color,
.is-style-st-group-line-bold.has-vivid-cyan-blue-color {
	border-left-color: #0693e3;
	color: inherit;
}

.is-style-st-group-line.has-very-light-gray-color,
.is-style-st-group-line-bold.has-very-light-gray-color {
	border-left-color: #fafafa;
	color: inherit;
}

.is-style-st-group-line.has-very-dark-gray-color,
.is-style-st-group-line-bold.has-very-dark-gray-color {
	border-left-color: #313131;
	color: inherit;
}

.is-style-st-group-line.has-white-color,
.is-style-st-group-line-bold.has-white-color {
	border-left-color: #ffffff;
	color: inherit;
}

/* かぎ括弧, 角括弧 */
.is-style-st-group-corner-brackets.has-pale-pink-color::before,
.is-style-st-group-corner-brackets.has-pale-pink-color::after,
.is-style-st-group-square-brackets.has-pale-pink-color::before,
.is-style-st-group-square-brackets.has-pale-pink-color::after {
	border-color: #f78da7;
}

.is-style-st-group-corner-brackets.has-soft-red-color::before,
.is-style-st-group-corner-brackets.has-soft-red-color::after,
.is-style-st-group-square-brackets.has-soft-red-color::before,
.is-style-st-group-square-brackets.has-soft-red-color::after {
	border-color: #e92f3d;
	color: inherit!important;
}

.is-style-st-group-corner-brackets.has-light-grayish-red-color::before,
.is-style-st-group-corner-brackets.has-light-grayish-red-color::after,
.is-style-st-group-square-brackets.has-light-grayish-red-color::before,
.is-style-st-group-square-brackets.has-light-grayish-red-color::after {
	border-color: #fdf0f2;
	color: inherit!important;
}

.is-style-st-group-corner-brackets.has-vivid-yellow-color::before,
.is-style-st-group-corner-brackets.has-vivid-yellow-color::after,
.is-style-st-group-square-brackets.has-vivid-yellow-color::before,
.is-style-st-group-square-brackets.has-vivid-yellow-color::after {
	border-color: #ffc107;
}

.is-style-st-group-corner-brackets.has-very-pale-yellow-color::before,
.is-style-st-group-corner-brackets.has-very-pale-yellow-color::after,
.is-style-st-group-square-brackets.has-very-pale-yellow-color::before,
.is-style-st-group-square-brackets.has-very-pale-yellow-color::after {
	border-color: #fffde7;
}

.is-style-st-group-corner-brackets.has-light-green-cyan-color::before,
.is-style-st-group-corner-brackets.has-light-green-cyan-color::after,
.is-style-st-group-square-brackets.has-light-green-cyan-color::before,
.is-style-st-group-square-brackets.has-light-green-cyan-color::after {
	border-color: #eefaff!important;
}

.is-style-st-group-corner-brackets.has-pale-cyan-blue-color::before,
.is-style-st-group-corner-brackets.has-pale-cyan-blue-color::after,
.is-style-st-group-square-brackets.has-pale-cyan-blue-color::before,
.is-style-st-group-square-brackets.has-pale-cyan-blue-color::after {
	border-color: #8ed1fc;
}

.is-style-st-group-corner-brackets.has-vivid-cyan-blue-color::before,
.is-style-st-group-corner-brackets.has-vivid-cyan-blue-color::after,
.is-style-st-group-square-brackets.has-vivid-cyan-blue-color::before,
.is-style-st-group-square-brackets.has-vivid-cyan-blue-color::after {
	border-color: #0693e3;
}

.is-style-st-group-corner-brackets.has-very-light-gray-color::before,
.is-style-st-group-corner-brackets.has-very-light-gray-color::after,
.is-style-st-group-square-brackets.has-very-light-gray-color::before,
.is-style-st-group-square-brackets.has-very-light-gray-color::after {
	border-color: #fafafa;
}

.is-style-st-group-corner-brackets.has-very-dark-gray-color::before,
.is-style-st-group-corner-brackets.has-very-dark-gray-color::after,
.is-style-st-group-square-brackets.has-very-dark-gray-color::before,
.is-style-st-group-square-brackets.has-very-dark-gray-color::after {
	border-color: #313131;
}

.is-style-st-group-corner-brackets.has-white-color::before,
.is-style-st-group-corner-brackets.has-white-color::after,
.is-style-st-group-square-brackets.has-white-color::before,
.is-style-st-group-square-brackets.has-white-color::after {
	border-color: #ffffff;
}


p.has-st-margin-bottom--2,
.is-style-st-wide-background.wp-block-group.has-background.has-st-margin-bottom--2,
.is-style-st-wide-background.has-st-margin-bottom--2,
.st-wide-background.has-st-margin-bottom--2,
.wp-block-group.has-st-margin-bottom--2 {
	margin-bottom: -20px!important;
}

p.has-st-margin-bottom--1,
.is-style-st-wide-background.wp-block-group.has-background.has-st-margin-bottom--1,
.is-style-st-wide-background.has-st-margin-bottom--1,
.st-wide-background.has-st-margin-bottom--1,
.wp-block-group.has-st-margin-bottom--1 {
	margin-bottom: -10px!important;
}

p.has-st-margin-bottom-2,
.is-style-st-wide-background.wp-block-group.has-background.has-st-margin-bottom-2,
.is-style-st-wide-background.has-st-margin-bottom-2,
.st-wide-background.has-st-margin-bottom-2,
.wp-block-group.has-st-margin-bottom-2 {
	margin-bottom: 40px!important;
}

/* @keyframes アニメーション */
.st-key-slidedown {
	animation-name: StSlideDown; /* 上から下 */
	animation-duration: 2s;
}

.st-key-slice-up {
	animation-name: StSlideUp; /* 下から上 */
	animation-duration: 2s;
}

.st-key-righttuoleft {
	animation-name: StRightToLeft; /* 右から左 */
	animation-duration: 2s;
}

.st-key-righttuoleft {
	animation-name: StLeftToRight; /* 左から右 */
	animation-duration: 2s;
}

.st-key-fedein {
	animation-name: StFedeIn; /* フェードイン */
	animation-duration: 2s;
}

/* 上から下 */
@keyframes StSlideDown {
  0% {
      opacity: 0;
      transform: translateY(-50px);
  }
  100% {
      opacity: 1;
      transform: translateY(0);
  }
}

/* 下から上 */
@keyframes StSlideUp {
  0% {
      opacity: 0;
      transform: translateY(50px);
  }
  100% {
      opacity: 1;
      transform: translateY(0);
  }
}

/* 右から左 */
@keyframes StRightToLeft {
	0% {
		opacity: 0;
		transform: translateX(50px);
	}
	100% {
		opacity: 1;
		transform: translateX(0);
	}
}

/* 左から右 */
@keyframes StLeftToRight {
	0% {
		opacity: 0;
		transform: translateX(0);
	}
	100% {
		opacity: 1;
		transform: translateX(50px);
	}
}

/* フェードイン */
@keyframes StFedeIn {
  0% {
      opacity: 0;
  }
  100% {
      opacity: 1;
  }
}





@media print, screen and (max-width: 959px) {
	#headbox {
				padding: 0 10px 15px;
		}

		/* タイトル下に余白 */
	#header-l {
		padding-bottom: 10px;
	}
	}



/*ヘッダーウィジェット*/
header .headbox .textwidget,
#footer .headbox .textwidget{
			background: #0a0909;
		}

	header h1.descr.sitenametop:not(.entry-title):not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
	header h1.sitename.sitenametop:not(.entry-title):not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) {
		margin-bottom: 5px;
		padding-top:5px;
	}

/* ヘッダー画像エリア表示設定 */
	body:not(.front-page) #st-header {
		display: none;
	}









	
	

	/* おすすめヘッダーカードを角丸に */
	.st-cardlink-card {
		border-radius: 5px;
	}



	.comment-form-url{
		display:none;
	}

	.comment-form-email{
		display:none;
	}

	.comment-notes {
		display:none;
	}



 /* 画像の高さ / 幅 * 100% */
.content-post-slider .post-slide-image::before, /* サムネイルスライドショー・ショートコードスライドショー */
.post-card-list .post-card-image::before /* カードデザイン */
{
	padding-top: 74.25742%;
}

	/* 記事スライドショー */
	.header-post-slider .post-slide-image::before {
		padding-top: 70%; /* 画像の高さ (657.2px) / 幅 (1,060px) * 100% */
	}
	@media only screen and (min-width: 600px) {
		.header-post-slider .post-slide-image::before {
			padding-top: 40%; /* 画像の高さ (593.6px) / 幅 (1,060px) * 100% */
		}
	}

	#st-header-bottom-category .content-post-slider .post-slide-image::before /* サムネイルスライドショー */
	{
		padding-top: 56%;
	}

	.header-post-slider .post-slide-text {
		padding-left: 10px;
		padding-bottom: 10px;
	}


	.header-post-slider .post-slide-image img,
	.header-post-slider .post-slide.has-image .post-slide-image img,
	#st-magazine .kanren dt img, /* JET */
	.content-post-slider .post-slide-image img, /* サムネイルスライドショー・ショートコードスライドショー */
	.post-card-list .post-card-image img {
		width: 100%;
		height: 100%;
	}







	@media print, screen and (max-width: 599px) {
		#footer .st-cardbox .clearfix dt.st-card-img,
		#side .st-cardbox .clearfix dt.st-card-img,
		main .st-cardbox .clearfix dt.st-card-img,
		.post .st-cardbox .clearfix dt.st-card-img {
			height: 100px;
		}
	}

	.st-cardstyle .st-cardbox .clearfix dt.st-card-img img,
	.post .st-cardstyle .st-cardbox .clearfix dt.st-card-img img,
	#side .st-cardstyle .st-cardbox .clearfix dt.st-card-img img {
		height: 200px;
	}
	@media only screen and (min-width: 600px) {
		.st-cardstyleb .st-cardbox .clearfix dt.st-card-img img,
		.post .st-cardstyleb .st-cardbox .clearfix dt.st-card-img img,
		#side .st-cardstyleb .st-cardbox .clearfix dt.st-card-img img {
			height: 200px;
		}
	}





			/* キャプション */
		.wp-block-embed.is-type-wp-embed.wp-block-embed-wordpress {
			position: relative;
		}

		/* ラベルがある場合 */
		.wp-block-embed.is-type-wp-embed.kanren figcaption,
		.wp-block-embed.is-type-wp-embed.check figcaption,
		.wp-block-embed.is-type-wp-embed.important figcaption,
		.wp-block-embed.is-type-wp-embed.popular figcaption {
			font-size: .7em;
			color: #ccc;
			text-align:center;
			margin-top: -10px;
		}

		.wp-block-embed.is-type-wp-embed:not(.kanren):not(.important):not(.popular) figcaption {
			position: absolute;
			top: -20px;
			right: 0;
			display: inline-block;
			height: 30px;
			line-height: 30px;
			text-align: center;
			padding: 0 15px 0 18px;
			font-size: 12px;
			box-sizing: border-box;
			font-weight: bold;
							background: #ffc042;
										color: #ffffff;
					}

		.wp-block-embed.is-type-wp-embed:not(.kanren):not(.important):not(.popular) figcaption::after {
			position: absolute;
			content: '';
			width: 0px;
			height: 0px;
			z-index: 1;
			top: 0;
			right: -15px;
			border-width: 15px;
							border-color: #ffc042 transparent transparent #ffc042;
						border-style: solid;
		}

		.wp-block-embed.is-type-wp-embed:not(.kanren):not(.important):not(.popular) figcaption::before {
			position: absolute;
			content: '';
			width: 0px;
			height: 0px;
			z-index: 1;
			top: 0;
			right: -15px;
			border-width: 15px;
							border-color: transparent transparent #ffc042 #ffc042;
						border-style: solid;
		}
	



	@media print, screen and (max-width: 599px) {
		.st-timeline .kanren.st-cardbox dd {
			padding-left: 85px;
			padding-right: 0;
		}
		.st-timeline .kanren.st-cardbox dt {
			width: 70px;
		}
	}

	:root main .kanren:not(.st-cardbox) dt:not(.st-cardbox) img,
	.wp-block-columns .kanren:not(.st-cardbox) dt:not(.st-card-img) {
		float: none;
		width: 100%;
	}
	.wp-block-columns .kanren:not(.st-cardbox) dd {
		float: none;
		padding-top: 10px;
		padding-left: 0;
	}

	@media only screen and (max-width: 599px) {
			.kanren:not(.st-cardbox) dt {
			
				width: 150px;

									float: left;
				
					}

		
		.kanren:not(.st-cardbox) dt img {
							width: 150px;
					}

		.kanren:not(.st-cardbox) dd {
			
									padding-left: 165px;
				
					}

		
		/*view数*/
		.st-wppviews-label .wpp-views,
		.st-wppviews-label .wpp-views-limit {
			font-size: 90%;
		}
	
			/* YouTubeサムネイル */
		.kanren:not(.st-cardbox) .youtube_thum_link_150 {
									width: 150px;
					height: 150px;
						}
		/*PVモニター*/
		.st-pvm-ranking-item-image {
									width: 150px;
						}
	
	}





	.slick-prev::before,
	.slick-next::before {
		color: #424242	}

/* 検索フォーム */
#s,
.s {
			color: #586365;
				font-size: 16px;
				padding-left: 25px;
				padding-top: 10px;
		padding-bottom: 10px;
		}

.st-custom-search-box-tpl-default .cs-text-input {
			padding-left: 25px !important;
		padding-right: 25px !important;
				padding-top: 10px !important;
		padding-bottom: 10px !important;
	}

input#s:-ms-input-placeholder,
input.s:-ms-input-placeholder {
			color: #586365 !important;
				font-size: 16px !important;
	}

input#s::-ms-input-placeholder,
input.s::-ms-input-placeholder {
			color: #586365 !important;
				font-size: 16px !important;
	}

input#s::placeholder,
input.s::placeholder {
			color: #586365 !important;
				font-size: 16px !important;
	}

:root #searchform,
.st-custom-search-box-tpl-default .cs-text {
			border-color: #586365;
				border-width: 3px;
				border-radius: 10px;
	
	}

input#searchsubmit {
			padding-right: 25px;
		padding-left: 25px;
				color: #ffc042;
				font-size: 16px;
		}

/* カスタム検索ボタン */
.cs-search-button {
	
			padding-left: 10px;
		padding-right: 10px;
	
			padding-top: 10px;
		padding-bottom: 10px;
	
			border-radius: 5px;
	
			background-color: #f3f3f3;
	
			color: #424242;
	
			font-size: 14px;
	
	
	}




	
		.front-page .st-tab-category .st-tab-content .st-tab-label:checked + label {
			position: relative;
		}

		.front-page .st-tab-category .st-tab-content .st-tab-label:checked + label,
		.front-page .st-tab-category .st-tab-content .st-tab-label:checked + label::before {
			top: inherit!important;
		}

					.front-page .st-tab-category .st-tab-content .st-tab-label.tab-a:checked + label::before {
				content: '';
				position: absolute;
				border: 8px solid transparent;
				bottom: -18px;
				left: calc( 50% - 8px );
				border-top: 10px solid #ffc042;
			}
		
					.front-page .st-tab-category .st-tab-content .st-tab-label.tab-b:checked + label::before {
				content: '';
				position: absolute;
				border: 8px solid transparent;
				bottom: -18px;
				left: calc( 50% - 8px );
				border-top: 10px solid #ffc042;
			}
		
					.front-page .st-tab-category .st-tab-content .st-tab-label.tab-c:checked + label::before {
				content: '';
				position: absolute;
				border: 8px solid transparent;
				bottom: -18px;
				left: calc( 50% - 8px );
				border-top: 10px solid #ffc042;
			}
		
					.front-page .st-tab-category .st-tab-content .st-tab-label.tab-d:checked + label::before {
				content: '';
				position: absolute;
				border: 8px solid transparent;
				bottom: -18px;
				left: calc( 50% - 8px );
				border-top: 10px solid #ffc042;
			}
		
					.front-page .st-tab-category .st-tab-content .st-tab-label + label {
				border-radius: 0!important;
			}

			.front-page .st-tab-category .st-tab-content .st-tab-label:checked + label::before {
				content: none!important;
			}
		
	




	.st-kaiwa-face2,
	.st-kaiwa-face {
		width: 80px;
	}

	.st-kaiwa-face2 img,
	.st-kaiwa-face img {
		width: 80px!important;
	}

	.st-kaiwa-face-name2,
	.st-kaiwa-face-name {
		max-width: 80px;
	}

	.st-kaiwa-area,
	.st-kaiwa-area2 {
		padding-top: 10px;
	}

	/* 簡易会話ふきだし */
	.is-style-st-paragraph-kaiwa::before,
	.is-style-st-paragraph-kaiwa-b::before {
		width: 80px;
		min-width: 80px;
		height: 80px;
	}
	.is-style-st-paragraph-kaiwa::after,
	.is-style-st-paragraph-kaiwa-b::after {
		top: 20px!important;
		left: 75px!important;
	}





	.st-middle-menu .menu > li {
		width:50%;
	}
	.st-middle-menu .menu li a{
		font-size:90%;
	}


	.st-pvm-ranking-item-image::before, /* PVモニター */
	.poprank-no2,
	.poprank-no {
		border-radius: 0 0 5px 0;
	}


	.sns {
		width: 100%;
		text-align:center;
	}

	.sns li {
		float: none;
	}

	.sns li a {
		margin:0;
	}

	.post .sns ul,
	.sns ul {
		margin:0 auto;
		display: flex;
		justify-content: center;
		flex-wrap: wrap;
	}

	.snstext{
		display:none;
	}

	.snscount{
		display:none;
	}

	.sns li {
		float: left;
		list-style: none;
		width: 40px;
		margin: 5px;
		position: relative;
	}

	.sns li i {
		font-size: 19px!important;
	}

	.sns li a {
					border-radius: 50%;
				box-sizing: border-box;
		color: #fff;
		font-size: 19px;
		height: 40px;
		width: 40px;
		padding: 0;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
	}

	.sns li a .st-fa,
	.sns li a .fa {
		padding: 0;
		border: 0;
		height: auto;
	}

	/* ツイッター */
	.sns .twitter a {
		box-shadow: none;
	}

	.sns .twitter a:hover {
		background:#424242;
		box-shadow: none;
	}

	.sns .st-svg-twitter::before {
		position: relative;
	}

	/* Facebook */
	.sns .facebook a {
		box-shadow: none;
	}
	.sns .facebook a:hover {
		background:#2c4373;
		box-shadow: none;
	}

	.sns .st-svg-facebook::before {
		position: relative;
		top:1px;
	}

	/* Pinterest */
	.sns .sns-pinterest a {
		box-shadow: none;
	}
	.sns .sns-pinterest a:hover {
		background:#d30018;
		box-shadow: none;
	}

	.sns .st-svg-pinterest-p::before {
		position: relative;
		left: 1px;
	}

	/* URLコピー */
	.sns .share-copy a {
		box-shadow: none;
	}
	.sns .share-copy a:hover {
		background:#ccc;
		box-shadow: none;
	}

	.sns .share-copy::before {
		position: relative;
		left: 1px;
	}

	.sns .share-copy .st-svg-clipboard {
		border-right: none;
	}

	/* はてぶ */
	.sns .hatebu a {
		box-shadow: none;
	}

	.sns .hatebu a:hover {
		box-shadow: none;
		background:#00a5de;
	}

	.sns .st-svg-hateb::before {
		border-right:none;
		padding-right:0;
		font-size:19px!important;
	}

	.sns .st-svg-hateb::before {
		position: relative;
		left: 1px;
	}

	/* LINE */
	.sns .line a {
		box-shadow: none;
	}
	.sns .line a:hover {
		background:#009200;
		box-shadow: none;
	}

	.sns .st-svg-comment::before {
		position: relative;
		left: 1px;
		top: -1px;
	}

	/* Pocket */
	.sns .pocket a {
		box-shadow: none;
	}
	.sns .pocket a:hover {
		background:#F27985;
		box-shadow: none;
	}

	.sns .st-svg-get-pocket::before {
		position: relative;
		top: 1px;
	}

	/* コメント */
	.sns .sns-comment a {
		box-shadow: none;
	}

	.sns .sns-comment a:hover {
		background:#FFB300;
		box-shadow: none;
	}

	.sns .sns-comment::before {
		position: relative;
		top:1px;
		left: 1px;
	}


	.st-author-profile-avatar img, /* プロフィールカード */
	.st-author-box dt img, img.avatar, /* 記事上ライター情報 */
	.st-authorpage-profile-avatar img, /* authorページ */
	.st-author-box dt img,
	img.avatar {
		border-radius:50%;
	}




	.p-navi {
		display:none;
	}










    main .post h2:not(.st-css-no) span.st-h-copy,
    main .post h3:not(.st-css-no) span.st-h-copy,
	main .h2modoki span.st-h-copy,
	main .h3modoki span.st-h-copy,
    main .entry-title:not(.st-css-no) span.st-h-copy,
    main .post .entry-title:not(.st-css-no) span.st-h-copy,
	main .h4modoki span.st-h-copy,
	main .post h4:not(.st-css-no):not(.st-matome):not(.rankh4):not(.post-card-title):not(#reply-title):not(.point) span.st-h-copy,
	main .h5modoki span.st-h-copy,
	main .post h5:not(.st-css-no):not(.st-matome):not(.rankh5):not(.post-card-title):not(#reply-title):not(.st-cardbox-t):not(.kanren-t):not(.popular-t):not(.post-card-title) span.st-h-copy,
	main .post h2:not(.st-css-no) span.st-h-copy-toc,
    main .post h3:not(.st-css-no) span.st-h-copy-toc,
	main .h2modoki span.st-h-copy-toc,
	main .h3modoki span.st-h-copy-toc,
    main .entry-title:not(.st-css-no) span.st-h-copy-toc,
    main .post .entry-title:not(.st-css-no) span.st-h-copy-toc,
	main .h4modoki span.st-h-copy-toc,
	main .post h4:not(.st-css-no):not(.st-matome):not(.rankh4):not(.post-card-title):not(#reply-title):not(.point) span.st-h-copy-toc,
	main .h5modoki span.st-h-copy-toc,
	main .post h5:not(.st-css-no):not(.st-matome):not(.rankh5):not(.post-card-title):not(#reply-title):not(.st-cardbox-t):not(.kanren-t):not(.popular-t):not(.post-card-title) span.st-h-copy-toc  {
		font-weight: normal!important;
	}

@media only screen and (max-width: 599px) {
	.st-header-flextitle {
		font-weight: 700;
    }
}




.s-navi-search-overlay .widget_st_categories_widget .cat-item a { /* 検索オーバーレイ */
	border-color: #ccc;
	color: #333;
}


	footer .widget_categories ul,
	footer .widget_categories ol {
		padding-left: 0;
	}

	#footer li.cat-item {
		list-style-type: none;
		margin: 0px;
		padding: 0px;
	}

	#footer li.cat-item a::after,
	#side li.cat-item a::after {
		content: " \f105";
		font-family: stsvg;
		position: absolute;
		right: 10px;
		font-size: .8em;
	}

	#footer li.cat-item a,
	#side li.cat-item a {
		position: relative;
		vertical-align: middle;
		width:100%;
		padding: 10px 20px 10px 10px;
		box-sizing:border-box;
		border-bottom: 1px solid #e1e1e1;
		color:#1a1a1a;
		text-decoration:none;
		display:flex;
		align-items: center;
	}

	#footer li.cat-item.has-thumbnail a,
	#side li.cat-item.has-thumbnail a {
		/* サムネイルあり */
		display: flex;
	}

	#footer li.cat-item a:hover,
	#side li.cat-item a:hover {
		opacity:0.5;
	}

			#footer li.cat-item a ,
		#side li.cat-item a {
			border-bottom-color: ;
			color: ;
		}
	

	/*TOC+*/
	#toc_container {
    	margin: 0 auto 20px;
    	text-align: center;
	}

	#toc_container .toc_title {
		text-align:center;
		padding: 5px;
		font-weight:bold;
		position:relative;
 		display: inline-block;
		vertical-align: middle;
		border-bottom: 2px solid #333;
		margin-bottom: 5px;
	}

	#toc_container:not(.contracted) .toc_title {
		margin:0 auto 10px;
	}

	#toc_container .toc_title::before {
  		content: "\f0f6\00a0";
  		font-family: stsvg;
	}

	#toc_container .toc_title .toc_toggle {
		font-weight: normal;
		font-size:95%;
	}

	.post #toc_container ul,
	.post #toc_container ol {
		list-style: none;
		margin-bottom: 0;
	}

	.toc_number {
		font-weight:bold;
		margin-right:5px;
		color:#ccc;
	}

	#toc_container ul a {
		display: block;
		text-decoration: none;
		color: #000;
		padding-bottom:5px;
		border-bottom: 1px dotted #ccc;
	}

	#toc_container ul a:hover {
		opacity:0.5;
	}

	#toc_container .toc_list > li> li > a {
		margin-bottom:10px;
	}

	#toc_container .toc_list > li > a {
		border-bottom: none;
	}

	.post #toc_container ul ul {
		padding:  5px 0;
	}

	.post #toc_container ul ul ul {
		padding-left: 10px;
	}

	#toc_container li {
		font-weight:bold;
		margin-bottom: 5px;
		padding: 10px 0px;
		list-style-type:none;
		text-align: left;
		text-indent:-0.8em;
		padding-left:1em;
	}

	#toc_container > ul > li {
		font-size: 18px;
	}

	#toc_container li a::before {
  		font-family: stsvg;
  		content: "\f0da\00a0\00a0";
  		color: #333;
	}

	#toc_container li li a::before {
  		content: none;
	}

	#toc_container li li {
		text-align:left;
		font-weight:normal;
		list-style:decimal outside none;
		text-indent:0;
		padding: 5px 0;
	}

	#toc_container li li li{
		margin-bottom:0;
		padding:3px 0;
		list-style-type:none;
		text-indent:-0.8em;
		padding-left:1em;
	}

	#toc_container li li li a{
		border:none;
		margin-bottom:0;
		padding:0;
	}

	#toc_container li li li a::before {
  		font-family: stsvg;
  		content: "\f0da\00a0\00a0";
  		color: #9E9E9E;
	}

	/* 第一階層のみの場合 */
	#toc_container.only-toc ul {
		padding:20px;
	}

	#toc_container.only-toc li{
		padding:0;
		font-weight:normal;
	}

	#toc_container.only-toc li a::before{
		content: none;
	}

	#toc_container.only-toc li{
		list-style-type: decimal;
		border-bottom:dotted 1px #ccc;
	}

	#st_toc_container.only-toc:not(.st_toc_contracted) {
					padding: 20px;
			}

	/* オリジナル */
	.post #toc_container ol.st-original-toc > li {
		list-style: decimal;
		text-align:left;
		font-weight: normal;
		padding: 0;
		text-indent: 0;
	}
	#toc_container ol.st-original-toc > li a::before {
  		content: none;
	}





	#s-navi dt.trigger {
		justify-content: space-between;
	}

	.lp header {
		display: none;
	}

	@media print, screen and (min-width: 960px) {
		.colum1.lp #content-w {
			padding-top: 0;
		}
	}

.front-page .lp header {
			display: block;
	}

	.colum1.lp #content-w main {
		padding-top: 20px;
	}





/*
旧st-kanri.phpより移動（ここまで）
-------------------------------------------*/

/*グループ1
------------------------------------------------------------*/

/* body背景色 */


/* 一括カラー反映 */
	/*メインコンテンツのテキスト色*/
	main,
	.post > * {
		color: #333333;
	}



input, textarea {
	color: #000;
}

	/*メインコンテンツのリンク色*/
	a,
	.no-thumbitiran h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) a,
	.no-thumbitiran h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) a {
		color: #0b6bbf;
	}


/*テーブルのボーダー*/
	.post table thead,
	.post table,
	.post .wp-block-table table thead,
	.post .wp-block-table table,
	.post .wp-block-table.is-style-st-table-line table,
	.post .wp-block-table.is-style-st-table-line-2 table {
		border-top-color: #ffc042;
		border-right-color: #ffc042;
	}

	.post table thead th,
	.post table thead td,
	table tr th,
	table tr td,
	.post .wp-block-table table thead th,
	.post .wp-block-table table thead td,
	.wp-block-table table tr th,
	.wp-block-table table tr td {
		border-bottom-color: #ffc042;
		border-left-color: #ffc042;
		border-top: none;
	}

	/* ラインなし */
	.wp-block-table.is-style-st-table-no-line table,
	.wp-block-table.is-style-st-table-no-line thead,
	.wp-block-table.is-style-st-table-no-line thead th,
	.wp-block-table.is-style-st-table-no-line thead td,
	.wp-block-table.is-style-st-table-no-line table tr th,
	.wp-block-table.is-style-st-table-no-line table tr td,
	.post .wp-block-table.is-style-st-table-no-line table,
	.post .wp-block-table.is-style-st-table-no-line thead,
	.post .wp-block-table.is-style-st-table-no-line thead th,
	.post .wp-block-table.is-style-st-table-no-line thead td,
	.post .wp-block-table.is-style-st-table-no-line table tr th,
	.post .wp-block-table.is-style-st-table-no-line table tr td {
		border: 0;
	}

/*偶数行のセル*/
.post table tr:nth-child(even) {
	background-color: #f9f9f9;
}


/* ヘッダーセクション */
#wp-calendar:not(.has-background) thead tr th,
table thead tr th,
table thead tr:first-child th {
					font-weight: bold;
	}

/*縦一行目のセル*/
.wp-block-table table tr:first-child td:first-child,
table tr td:first-child,
.wp-block-table table thead + tbody tr:first-child td:first-child,
table thead + tbody tr:first-child td:first-child,
table thead + tbody tr:first-child td:first-child,
table thead + tbody tr td:first-child {
			}

/* 会話レイアウト */

			.st-kaiwa-hukidashi,
		.st-kaiwa-hukidashi2 {
			border: solid 2px #586365;
							background-color: #f7f7f7;
					}
		.st-kaiwa-hukidashi::before {
			content: "";
			position: absolute;
			top: 30px;
			display: block;
			width: 0px;
			height: 0px;
			border-style: solid;
			margin-top: -13px;
			left: -13px;
			border-width: 13px 13px 13px 0;
			border-color: transparent #586365 transparent transparent;
		}
		.st-kaiwa-hukidashi::after {
			left: -10px;
			border-width: 10px 10px 10px 0;
							border-color: transparent #f7f7f7 transparent transparent;
					}
		.st-kaiwa-hukidashi2::before {
			content: "";
			position: absolute;
			top: 30px;
			display: block;
			width: 0px;
			height: 0px;
			border-style: solid;
			margin-top: -13px;
			right: -13px;
			border-width: 13px 0 13px 13px;
			border-color: transparent transparent transparent #586365;
		}
		.st-kaiwa-hukidashi2::after {
			right: -10px;
			border-width: 10px 0 10px 10px;
							border-color: transparent transparent transparent #f7f7f7;
					}
	








	.st-kaiwa-box:not(.st-kaiwa) .st-kaiwa-face img,
	.st-kaiwa-box:not(.st-kaiwa) .st-kaiwa-face2 img {
		border: none;
	}
			.is-style-st-paragraph-kaiwa::after,
		.is-style-st-paragraph-kaiwa-b::after {
			left: 75px!important;
		}
	

	/*この記事を書いた人*/
	#st-tab-menu li.active {
	  background: #ffc042;
	}
	#st-tab-box {
		border-color: #ffc042;
	}
	.post #st-tab-box p.st-author-post {
		border-bottom-color: #ffc042;
	}
	.st-author-date{
		color:#ffc042;
	}

	/* 非アクティブのタブ */
	#st-tab-menu li {
		color:#ffc042;
	}

	/* SNSリンク */
	#st-tab-menu + #st-tab-box .st-author-sns i::before {
	  color: #ffc042;
	}

	#st-tab-box {
		background:#fffaf2;
	}

	/* 非アクティブのタブ */
	#st-tab-menu li {
		background:#fffaf2;
	}

/* プロフィール */
	.st-author-profile {
		border-radius: 10px;
					overflow: hidden;
			}
	#st-tab-box {
		border-radius: 0 10px 10px 10px;
					overflow: hidden;
			}
	#st-tab-menu li {
		border-radius: 5px 5px 0 0;
	}

	.st-author-box.st-author-master .rankstlink-r2 p a,
	.st-author-box.st-author-master .rankstlink-r2 p {
		border-radius: 999px;
		-webkit-border-radius: 999px;
		-moz-border-radius: 999px;
	}


	.st-author-profile {
		text-align:center;
		width:100%;
		box-sizing:border-box;
					border:1px solid #5b5b5b;
							background: #fff;
							box-shadow: 0 1px 8px rgb(0,0,0, .1), 0 4px 4px -4px rgb(0,0,0, .1);
				margin-bottom: 10px;
	}

	.author main .st-author-profile { /* authorページは除外 */
		border: none;
		background-color: transparent;
		box-shadow: none;
		margin-bottom: 0;
	}

	.st-author-profile-header-card { /* プロフィールヘッダー */
		width:100%;
		min-height: 100px;
		box-sizing: border-box;
	}

	.st-author-profile-avatar img { /* アバター */
		width:100px;
		height:100px;
					margin:50px auto 5px;
					}

	.home .st-author-profile-content,
	.st-author-profile-content {
		padding:10px 20px 10px;
		text-align:center;
	}

	.st-author-profile .st-author-nickname { /* 名前 */
		font-size: 110%;
		border: none;
		margin-bottom: 5px;
					color: #333;
			}

	@media print, screen and (max-width: 599px) { /* スマホ */
		.st-author-profile-avatar img { /* アバター */
			width:120px;
			height:120px;
							margin:60px auto 5px;
					}
		.st-author-profile .st-author-nickname { /* 名前 */
			font-size: 130%;
		}
	}

	#side .st-author-profile .st-author-description,
	.st-author-profile .st-author-description { /* 説明 */
		margin-bottom: 20px;
			}

	/* スライドメニュー内 */
	#s-navi dl.acordion .st-author-profile .st-author-nickname {
		font-size: inherit;
	}

	#s-navi dl.acordion .st-author-profile p.st-author-description {
		margin-bottom: 20px;
		font-size: 90%;
		line-height: 1.7;
	}

	/* SNS */
	.st-author-profile .sns {
		padding: 0;
		margin-bottom:10px;
		width: 100%;
		text-align:center;
	}

	.profile-sns {
		text-align: center;
	}

	.st-author-profile .sns li,
	#side aside .st-author-profile .sns li {
		padding:0 3px;
		text-align:center;
		display: inline-block;
		margin-right: 0;
		float: none;
		list-style: none;
		width: 40px;
		position: relative;
	}

	.st-author-profile .sns li a,
	#side aside .st-author-profile .sns li a {
		margin:0;
		border-radius: 50%;
		box-sizing: border-box;
		color: #fff;
		font-size: 19px;
		height: 40px;
		width: 40px;
		padding: 0;
		-webkit-box-pack: center;
		-webkit-justify-content: center;
		-ms-flex-pack: center;
		justify-content: center;
	}

	.st-author-box .st-author-profile .st-fa,
	.st-author-box .st-author-profile .fa {
		margin-right: 0;
		padding: 0;
		border: 0;
		height: auto;
	}

	.st-author-profile .post .sns ul,
	.st-author-profile .sns ul {
		width: 100%;
		margin:0 auto;
	}

	.st-author-profile .snstext{
		display:none;
	}

	.st-author-profile .sns li i {
		font-size: .8em!important;
	}

	/* ツイッター */
	.st-author-profile .sns .twitter a {
		box-shadow: none;
	}

	.st-author-profile .sns .twitter a:hover {
		background:#424242;
		box-shadow: none;
	}

	.st-author-profile .sns .st-svg-twitter::before {
		position: relative;
	}

	/* Facebook */
	.st-author-profile .sns .facebook a {
		box-shadow: none;
	}
	.st-author-profile .sns .facebook a:hover {
		background:#2c4373;
		box-shadow: none;
	}

	.st-author-profile .sns .st-svg-facebook::before {
		position: relative;
		top:1px;
	}

	/* instagram */
	.st-author-profile .sns .instagram a {
		background-image: linear-gradient(-135deg,#4933f7,#ef1837,#fbd980);
	}

	/* homepage */
	.st-author-profile .sns .author-homepage a {
		background:#ccc;
	}

	/* youtube */
	.st-author-profile .sns .author-youtube a {
		background:#ff0000;
	}

	/* amazon */
	.st-author-profile .sns .author-amazon a {
		background:#ffa724;
	}

	.st-author-profile .sns li.author-amazon i {
		font-size: 16px!important;
	}

	/* feed */
	.st-author-profile .sns .author-feed a {
		background:#2bb24c;
	}

	/* form */
	.st-author-profile .sns .author-form a {
		background:#ccc;
	}

	.st-author-profile .sns li.author-form i {
		font-size: 16px!important;
	}

	.st-author-box.st-author-master .rankstlink-r2 p {
		box-shadow: none;
		width: inherit;
	}

	.st-author-profile .rankstlink-r2 p a { /* ボタン */
		font-size: 90%;
		text-decoration: none;
		font-weight: bold;
		box-sizing: border-box;
					/* Android4.1 - 4.3 */
			background: -webkit-linear-gradient(top,  #eb445a 0%,#eb445a 100%);
			/* IE10+, FF16+, Chrome26+ */
			background: linear-gradient(to bottom,  #eb445a 0%,#eb445a 100%);
		
		
					color: #fff;
			}

	.st-author-profile .rankstlink-r2 p {
		margin-bottom: 10px;
	}


/*こんな方におすすめ*/







	.st-blackboard-title::before {
  		content: "\f0f6\00a0";
  		font-family: stsvg;
	}

/* 目次（TOC+） */

#st_toc_container,
#toc_container {
						border: 2px solid #586365;
				border-radius: 5px;
	}

	#st_toc_container {
		text-align: left;
	}

#st_toc_container:not(.st_toc_contracted):not(.only-toc),
#toc_container:not(.contracted) { /* 表示状態 */
			padding:20px 30px 30px;
	}

#st_toc_container.st_toc_contracted,
#toc_container.contracted { /* 非表示状態 */
			padding: 10px 30px;
	}

	.post #st_toc_container .st_toc_title,
	.post #st_toc_container .st_toc_title a,
	.post #toc_container .toc_title,
	.post #toc_container .toc_title a {
		color: #586365;
		border-color: #586365;
	}


	.post #st_toc_container .st-original-toc > li,
	.post #st_toc_container .st-original-toc > li a,
	#st_toc_container ul.st_toc_list + li,
	#st_toc_container ul.st_toc_list > li > a,
	#toc_container ul.st_toc_list > li > a {
  		color: #586365;
	}


	/* 第一階層のみの場合 */
	#st_toc_container.only-toc li {
		margin-bottom: 0;
	}

#toc_container.only-toc li,
#st_toc_container.st_toc_style_default.only-toc li,
.post #st_toc_container.st_toc_style_default .st-original-toc li a,
#st_toc_container.st_toc_style_default ul a,
#st_toc_container.st_toc_style_paper.only-toc li,
.post #st_toc_container.st_toc_style_paper .st-original-toc li a,
#st_toc_container.st_toc_style_paper ul a,
#toc_container ul a {
			padding-bottom: 0;
	}

#st_toc_container.st_toc_style_check .st_toc_list > li > a,
#st_toc_container.st_toc_style_check.only-toc .st_toc_list > li > a,
#st_toc_container.st_toc_style_question .st_toc_list > li > a,
#st_toc_container.st_toc_style_question.only-toc .st_toc_list > li > a {
	margin-bottom: 10px;
	padding-bottom: 0;
	border: none;
}


	#st_toc_container.only-toc li,
	#toc_container.only-toc li {
		font-weight:bold;
	}

	#st_toc_container .st_toc_title::before,
	#toc_container .toc_title::before {
  		content: "\e91c\00a0";
  		font-family: stsvg;
	}




	#st_toc_container.st_toc_style_default li,
	#st_toc_container.st_toc_style_paper li {
		text-indent: 0;
		padding-left: 0;
	}

	.post #st_toc_container.st_toc_style_default ul ul,
	.post #st_toc_container.st_toc_style_paper ul ul {
		padding: 5px 0 0 1.5em;
	}

	#st_toc_container.st_toc_style_default li a::before,
	#st_toc_container.st_toc_style_paper li a::before,
	#st_toc_container.st_toc_style_default li li a::before,
	#st_toc_container.st_toc_style_paper li li a::before,
	#st_toc_container > ul > li,
	#st_toc_container > ul ul > li{ /* リストの数字 */
		color: #5b5b5b;
		opacity: 1;
	}


	#st_toc_container.st_toc_style_timeline .st_toc_list::after,
	#st_toc_container.st_toc_style_timeline.only-toc .st_toc_list::after,
	#st_toc_container.st_toc_style_timeline-count .st_toc_list::after,
	#st_toc_container.st_toc_style_timeline-count.only-toc .st_toc_list::after {
		border-left-color: #ffc042;
	}
	#st_toc_container.st_toc_style_timeline .st_toc_list > li::before,
	#st_toc_container.st_toc_style_timeline-count .st_toc_list > li::before {
		background: #ffc042;
	}

	/* タイムライン（カウント） */
	.is-style-st-timeline-count::after {
		border-left: 2px solid #ffc042;
	}
	.is-style-st-timeline-count > li::before {
		background: #ffc042;
	}

	/* タイムライン（リスト） */
	.is-style-st-timeline-list::after {
		border-left: 1px solid #ffc042;
	}
	.is-style-st-timeline-list > li::before {
		background: #ffc042;
		color: #333;
	}

	/* リストスタイル タイムラインの下層リスト */
	.is-style-st-timeline-list li::marker,
	.is-style-st-timeline-count li::marker {
		color: #ffc042;
	}

	#st_toc_container.st_toc_style_timeline-count .st_toc_list > li::before {
		color: #ffffff;
	}

	/* タイムライン（カウント） */
	.is-style-st-timeline-count > li::before {
		color: #ffffff;
	}

	/* タイムライン（リスト） */
	.is-style-st-timeline-list > li::before {
		color: #ffffff;
	}

	/* チェック */
	:root [class^="is-style-st-heading-"].has-st-icon-check:not(.has-text-color)::before,
	#st_toc_container.st_toc_style_check .st_toc_list > li::before {
		color: #37ab9d;
		font-weight: normal;
	}

	/* はてな */
	:root [class^="is-style-st-heading-"].has-st-icon-question-circle:not(.has-text-color)::before,
	#st_toc_container.st_toc_style_question .st_toc_list > li::before {
		color: #ffc042;
		font-weight: normal;
	}


/*マル数字olタグ*/


.is-style-st-no > li::before,
.is-style-st-no-border > li::before,
.st-list-no:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before,
.post .is-style-st-maruno li::before,
.post .maruno li::before {
			background: #ffc042;
				color:#ffffff;
	}

	/* 四角背景 */
	.post .is-style-st-no > li::before,
	.post .is-style-st-no-border > li::before,,
	.st-list-no:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before {
		background-color: #ffc042;
	}

/*チェックulタグ*/


.post .is-style-st-maruck > li::before,
.post .maruck li::before {
			background: #ffc042;
				color:#ffffff;
	}

	.st-blackboard.square-checkbox .st-blackboard-list:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before,
	.is-style-st-square-checkbox-no-border > li::before,
	.is-style-st-square-checkbox > li::before,
	.st-square-checkbox ul li::before, /* チェックボックス（番号なしリスト）Classic */
	.st-square-checkbox li::before {
		position: absolute;
		left: .65em;
		content: "\f00c";
		font-family: stsvg;
					color:#ffc042;
				z-index: 2;
		line-height: 1.5;
		transform: scale(.8);
	}

	.st-blackboard.square-checkbox .st-blackboard-list:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before,
	.is-style-st-square-checkbox-no-border > li::before,
	.st-square-checkbox ul li::before, /* チェックボックス（番号なしリスト）Classic */
	.st-square-checkbox li::before {
		top: .3em;
	}

	.is-style-st-square-checkbox > li::before {
		top: .55em;
	}

	.st-blackboard.square-checkbox li::after,
	.is-style-st-square-checkbox-no-border > li::after,
	.is-style-st-square-checkbox > li::after,
	.st-square-checkbox ul li::after, /* チェックボックス（番号なしリスト）Classic */
	.st-square-checkbox li::after {
		content: "\e904";
		font-family: stsvg;
					color: #ffffff;
				position:absolute;
		z-index:1;
		left: .25em;
		font-size:150%;
		line-height:1.5;
	}

	.st-blackboard.square-checkbox li::after,
	.is-style-st-square-checkbox-no-border > li::after,
	.st-square-checkbox ul li::after, /* チェックボックス（番号なしリスト）Classic */
	.st-square-checkbox li::after {
		top: 0;
	}

	.is-style-st-square-checkbox > li::after {
		top: .15em;
	}

	/* マル */
	.is-style-st-circle > li::before,
	.is-style-st-circle-border > li::before,
	.st-list-circle:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before {
		background-color: #ffc042;
	}

/*Webアイコン*/
	.post .hatenamark2.on-color:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
	.post .st-svg-question-circle:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #ffc042;
	}

	.post .checkmark2.on-color:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
	.post .st-svg-check-circle:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #37ab9d;
	}

	.is-style-st-square-checkbox-no-border > li::before,
	.is-style-st-square-checkbox > li::before,
	.st-blackboard.square-checkbox .st-blackboard-list:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before,
	.st-square-checkbox li::before {
		color: #ffc042;
	}
	/* 簡易チェックマーク */
	.is-style-st-check > li::before,
	.is-style-st-check-border > li::before,
	.st-list-check:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::before {
		border-color: #ffc042;
	}

	.is-style-st-square-checkbox-no-border > li::after,
	.is-style-st-square-checkbox > li::after,
	.st-blackboard.square-checkbox li::after,
	.st-square-checkbox li::after {
		color: #ffffff;
	}
	/* 簡易チェックマーク */
	.is-style-st-check > li::after,
	.is-style-st-check-border > li::after,
	.st-list-check:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) li::after {
		border-color: #ffffff;
	}



	:root [class^="is-style-st-heading-"].has-st-icon-exclamation-circle:not(.has-text-color)::before,
	.post .attentionmark2.on-color:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
	.post .st-svg-exclamation-triangle:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #fc9d9d;
}

	.post .memomark2.on-color:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
	.post .st-svg-pencil-square-o:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #37ab9d;
	}

	.post .usermark2.on-color::before,
	.post .st-svg-user:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #ffc042;
	}

	:root [class^="is-style-st-heading-"].has-st-icon-oukan:not(.has-text-color)::before,
	.post .oukanmark.on-color::before,
	.post .st-svg-oukan:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
		color: #ffc042;
	}


/*サイト上部のボーダー色*/

/*ヘッダーの背景色*/


	
		#headbox-bg {
							/*Other Browser*/
				background: #ffffff;

									/* Android4.1 - 4.3 */
					background: -webkit-linear-gradient(left,  #ffffff 0%,#ffffff 100%);

					/* IE10+, FF16+, Chrome26+ */
					background: linear-gradient(to left,  #ffffff 0%,#ffffff 100%);
				
			
			
		}

	




/* header */



/*ヘッダー下からの背景色*/
#content-w {
      
	}


/*------------------
 mainエリア（トップ）
-------------------*/

	@media only screen and (min-width: 600px) {
	/* メインコンテンツのボーダー */
	
	/* シャドウを適応する */
		}


			@media only screen and (min-width: 600px) {
			
		
			}
		@media only screen and (max-width: 599px) {
			/* 反映しない場合は白色背景 */
			body.front-page main {
				background-color: #fff !important;
			}
		}
	

/*------------------
 mainエリア（記事）
-------------------*/

	@media only screen and (min-width: 600px) {
	/* メインコンテンツのボーダー */
	
	/* シャドウを適応する */
		}


			@media only screen and (min-width: 600px) {
						/*メインコンテンツの背景色*/
			body:not(.front-page) main {
				background: #ffffff!important;
			}
		
		
			}
		@media only screen and (max-width: 599px) {
			/* 反映しない場合は白色背景 */
			body:not(.front-page) main {
				background-color: #fff !important;
			}
		}
	

	header .sitename a, /*ブログタイトル*/
	nav li a /* メニュー */
	{
		color: #ffffff;
	}



	/*ページトップ*/
	#page-top:not(.page-top-img) a {
		background: #ffc042;
	}

	#page-top:not(.page-top-img) a {
		line-height:100%;
		border-radius: 50%;
	}
	#page-top:not(.page-top-img) {
		right: 15px;
	}

	#page-top {
		bottom: 80px;
	}
	@media screen and (orientation: landscape) { /* 横向きの場合のスタイル */
		/* iPhoneX */
		#page-top {
			bottom: calc(constant(safe-area-inset-bottom) + 80px );
			bottom: calc(env(safe-area-inset-bottom) + 80px );
		}
	}
	@media screen and (orientation: portrait) { /* 縦向きの場合のスタイル */
		#page-top {
			bottom: calc(constant(safe-area-inset-bottom) + 80px );
			bottom: calc(env(safe-area-inset-bottom) + 80px );
		}
	}
	@media screen and (orientation: landscape) { /* 横向きの場合のスタイル */
		/* iPhoneX */
		#footer-ad-box {
			padding-bottom: calc(constant(safe-area-inset-bottom) + 10px );
			padding-bottom: calc(env(safe-area-inset-bottom) + 10px );
			margin-bottom: 0;
		}
	}
	@media screen and (orientation: portrait) { /* 縦向きの場合のスタイル */
		#footer-ad-box {
			padding-bottom: calc(constant(safe-area-inset-bottom) + 10px );
			padding-bottom: calc(env(safe-area-inset-bottom) + 10px );
			margin-bottom: 0;
		}
	}



/*キャプション */
	header h1,
	header .descr{
		color: #ffffff;
	}

	/*キャプション */
	header #s-navi dl.acordion h1,
	header #s-navi dl.acordion .descr,
	header h1:not(.entry-title):not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
	header .descr {
		margin-bottom: 5px;
	}

	/* スライドメニューアイコン */
	#s-navi dt.trigger .op {
							color: #ffc042;
			}

	/* 検索アイコン（閉じる） + オーバーレイ */
	.s-navi-search-overlay.s-navi-search-activated #s-navi dt.trigger .op.op-search.active {
		color: #424242;
	}


	/* スマホタイトル テキスト */
	header #st-mobile-logo h1,
	header #st-mobile-logo .descr,
	#st-mobile-logo a {
		color: #ffffff;
	}


	header #st-mobile-logo {
		justify-content: center;
		text-align: center;
			}
	/*右メニュー*/
	.s-navi-right header #st-mobile-logo {
		text-align: center;
			}

	@media only screen and (max-width: 959px) {
		/* アイコンロゴ */
		#st-icon-logo,
		#s-navi.pcnone #st-icon-logo {
			margin-bottom: 5px;
			padding-right: 0;
		}
	}

	@media only screen and (max-width: 959px) {
		#st-icon-logo {
			padding-right: 0;
		}

			}




	#s-navi dt.trigger {
		height: 48pxpx;
	}

	@media only screen and (max-width: 959px) and (min-width: 600px) {
		#s-navi dt.trigger {
			height: calc( 48pxpx + 10px );
		}
	}

	
	


	#st-icon-logo img {
		max-height: 60px;
		width: auto;
	}

	#s-navi.pcnone #st-icon-logo img {
		max-height: 38px;
		width: auto;
	}



/*アコーディオンメニュー内背景色*/
#s-navi dd.acordion_tree,
#s-navi dd.acordion_search {
	/* 背景画像 */
	
			background-color: #586365;
	}


/* オーバーレイ検索フォーム */
html.s-navi-search-overlay #s-navi dd.acordion_search {
	background-image: none;
	background-color: rgba(255,255,255,.98);
}

/*追加ボタン1*/
#s-navi dt.trigger .op-st {
			background: #ffffff;
				color: #ffffff;
	}

/*追加ボタン2*/
#s-navi dt.trigger .op-st2 {
			background: #0a0101;
				color: #ffffff;
	}



/*スマホフッターメニュー*/
#st-footermenubox a {
	color: #ffffff;
}

	#st-footermenubox {
  		background: #ffc042;
	}


	/* スマホメニュー文字 */
	.widget_st_categories_widget ul.st-ac-cat .cat-item a, /* STINGERカテゴリー */
	#s-navi dl.acordion .acordion_tree .st-ac-box .st-widgets-title,
	.acordion_tree ul.menu li a,
	.acordion_tree ul.menu li,
	html:not(.s-navi-search-overlay) #s-navi dd.acordion_search .acordion_search_content {
		color: #ffffff;
	}

	.widget_st_categories_widget ul.st-ac-cat .cat-item a, /* STINGERカテゴリー */
	:root .acordion_tree .st-ac-box .widget_st_categories_widget .cat-item a,
	.acordion_tree ul.menu li a {
		border-bottom: 1px solid #586365;
	}

	/* ガイドマップメニュー */
	
	
	
	
	

#side aside ul.st-box-btn li,
.st-box-btn li,
.post .st-box-btn li,
.post ul.st-box-btn li:last-child {
		}

.st-box-btn .fa,
.st-box-btn .st-fa,
.st-box-btn img {
			font-size: 300%;
	}


	.acordion_tree .st-ac-box ul.st-ac-cat {
	  border-top-color: #586365;
	  border-left-color: #586365;
	}

	.acordion_tree .st-ac-box ul.st-ac-cat > li.cat-item  {
	  border-right-color: #586365;
	  border-bottom-color: #586365;
	}

	.acordion_tree .st-ac-box .widget_categories ul.st-ac-cat li.cat-item a {
	  color:#ffffff;
	}
	.s-navi-search-slide .wp-block-tag-cloud a, /* 検索スライド */
	.s-navi-search-slide .tagcloud a, /* 検索スライド */
	.s-navi-search-slide .acordion_search_content .widget_categories ul li.cat-item a, /* 検索スライド */
	.s-navi-search-slide .acordion_search_content .widget_st_categories_widget .cat-item a, /* 検索スライド */
	.acordion_tree .st-ac-box .widget_st_categories_widget .cat-item a,
	.acordion_tree .tagcloud a {
		color: #ffffff;
		border-color: #ffffff;
	}

	.kanren dl,
	.kanren .st-infeed-adunit {
  		border-bottom-color: #586365;
	}
	.kanren dl,
	.kanren .st-infeed-adunit {
		border-bottom-width: 2px;
    	border-bottom-style: dashed;
	}

	.st-pagelink .page-numbers {
		border-color: #5b5b5b;
		color: #5b5b5b;
	}
	.p-navi dl dt, /* PREV及びNEXT */
	.p-navi dl dd a,
	.st-pagelink a {
		color: #5b5b5b;
		text-decoration:none;
	}

	.p-navi dl dd a:hover {
		opacity: 0.7;
	}

/* 背景ワイド */
.wp-block-group.alignwide,
.colum1.st-lp-wide .wp-block-cover,
.is-style-st-wide-background.wp-block-group.has-background,
.is-style-st-wide-background,
.st-wide-background {
	margin-left: -15px;
	margin-right: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.wp-block-group.alignwide,
	.colum1.st-lp-wide .wp-block-cover,
	.is-style-st-wide-background.wp-block-group.has-background,
	.is-style-st-wide-background,
	.st-wide-background {
		margin-left: -30px;
		margin-right: -30px;
	    padding-left: 30px;
	    padding-right: 30px;
	}
}

@media print, screen and (min-width: 960px) {
	.wp-block-group.alignwide,
	.colum1.st-lp-wide .wp-block-cover,
	.is-style-st-wide-background.wp-block-group.has-background,
	.is-style-st-wide-background,
	.st-wide-background {
					margin-left: -50px;
			margin-right: -50px;
		    padding-left: 50px;
		    padding-right: 50px;
		 	}
	/* 1カラム */
	.colum1 .wp-block-group.alignwide,
	.colum1.st-lp-wide .wp-block-cover,
	.colum1 .is-style-st-wide-background.wp-block-group.has-background,
	.colum1 .is-style-st-wide-background,
	.colum1 .st-wide-background {
		margin-left: -70px;
		margin-right: -70px;
	    padding-left: 70px;
	    padding-right: 70px;
	}
}

/* グループブロック入れ子のワイド */
.colum1.st-lp-wide .wp-block-cover .wp-block-group,
.colum1 .is-style-st-wide-background.wp-block-group.has-background .wp-block-group,
.colum1 .is-style-st-wide-background .wp-block-group,
.colum1 .st-wide-background .wp-block-group {
	margin-left: 0;
	margin-right: 0;
	padding-left: 0;
	padding-right: 0;
}

/* 背景ワイド -右寄せ */
.is-style-st-wide-background-right,
.st-wide-background-right {
	margin-right: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.is-style-st-wide-background-right,
	.st-wide-background-right {
		margin-right: -30px;
	    padding-right: 30px;
		padding-left: 20px;
	}
}

@media print, screen and (min-width: 960px) {
	.is-style-st-wide-background-right,
	.st-wide-background-right {
					margin-right: -50px;
		    padding-right: 50px;
			padding-left: 20px;
		 	}
	/* 1カラム */
	.colum1 .is-style-st-wide-background-right,
	.colum1 .st-wide-background-right {
		margin-right: -70px;
	    padding-right: 70px;
		padding-left: 20px;
	}
}

/* 背景ワイド - 左寄せ */
.is-style-st-wide-background-left,
.st-wide-background-left {
	margin-left: -15px;
    padding: 20px 15px;
	margin-bottom: 20px;
}

@media only screen and (min-width: 600px) {
	.is-style-st-wide-background-left,
	.st-wide-background-left {
		margin-left: -30px;
	    padding-left: 30px;
		padding-right: 20px;
	}
}

@media print, screen and (min-width: 960px) {
	.is-style-st-wide-background-left,
	.st-wide-background-left {
					margin-left: -50px;
		    padding-left: 50px;
			padding-right: 20px;
		 	}
	/* 1カラム */
	.colum1 .is-style-st-wide-background-left,
	.colum1 .st-wide-background-left {
		margin-left: -70px;
	    padding-left: 70px;
		padding-right: 20px;
	}
}

.post .st-wide-background-left ol:last-child,
.post .st-wide-background-left ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background-left p:last-child,
.post .st-wide-background-right ol:last-child,
.post .st-wide-background-right ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background-right p:last-child,
.post .st-wide-background ol:last-child,
.post .st-wide-background ul:not(.toc_list):not(.st_toc_list):not(.children):not(.slick-dots):not(.st-pvm-nav-list):last-child,
.st-wide-background p:last-child {
	margin-bottom: 0;
}

/** 引用風 */
.st-wide-background-left.st-blockquote,
.st-wide-background-right.st-blockquote,
.st-wide-background.st-blockquote {
	position: relative;
	padding-top: 60px;
}

.st-wide-background-left.st-blockquote::before,
.st-wide-background-right.st-blockquote::before,
.st-wide-background.st-blockquote::before {
   	content: "\f10d";
  	font-family: stsvg;
	position: absolute;
	font-size: 150%;
	top: 20px;
	left:20px;
	color: #9E9E9E;
}

.is-style-st-wide-background-left:not(.has-background):not(.is-style-st-group-bg-diagonal):not(.is-style-st-group-bg-grid):not(.is-style-st-group-bg-dot):not(.is-style-st-group-line):not(.is-style-st-group-line-bold):not(.is-style-st-group-corner-brackets):not(.is-style-st-group-square-brackets),
.is-style-st-wide-background-right:not(.has-background):not(.is-style-st-group-bg-diagonal):not(.is-style-st-group-bg-grid):not(.is-style-st-group-bg-dot):not(.is-style-st-group-line):not(.is-style-st-group-line-bold):not(.is-style-st-group-corner-brackets):not(.is-style-st-group-square-brackets),
.is-style-st-wide-background:not(.wp-block-code):not(.has-background):not(.is-style-st-group-bg-diagonal):not(.is-style-st-group-bg-grid):not(.is-style-st-group-bg-dot):not(.is-style-st-group-line):not(.is-style-st-group-line-bold):not(.is-style-st-group-corner-brackets):not(.is-style-st-group-square-brackets),
.st-wide-background-left,
.st-wide-background-right,
.st-wide-background {
	background: #fafafa;
}

/** ビジュアルエディタ用 */
.mce-content-body .st-wide-background-left,
.mce-content-body .st-wide-background-right,
.mce-content-body .st-wide-background {
	padding: 20px!important;
	margin-left: 0!important;
	margin-right: 0!important;
	background: #fafafa;
}

/*グループ2
------------------------------------------------------------*/
/* 投稿日時・ぱんくず・タグ */
#breadcrumb h1.entry-title,
#breadcrumb,
#breadcrumb div a,
div#breadcrumb a,
.blogbox p,
.tagst,
#breadcrumb ol li a,
#breadcrumb ol li h1,
#breadcrumb ol li,
.kanren:not(.st-cardbox) .clearfix dd .blog_info p,
.kanren:not(.st-cardbox) .clearfix dd .blog_info p i,
.kanren:not(.st-cardbox) .clearfix dd .blog_info p a
{
	color: #777777;
}




/* 記事タイトル */





	
           	.post .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
									color: #5b5b5b;
				                                    background-color: transparent;
                                            background: none;
                                    
				
                                    border: none;
                
				
				
				            }

            
        




/* h2 */






				.h2modoki,
            h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
				                	background: #37ab9d;
				                					color: #ffffff;
				                position: relative;
                border: none;
                margin-bottom:30px;
		
					padding-top:10px!important;
			padding-bottom:10px!important;
		            }

			.h2modoki::after,
            h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::after {
                border-top: 10px solid #37ab9d;
                content: '';
                position: absolute;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                bottom: -10px;
                left: 30px;
                border-radius: 2px;
            }
            .h2modoki::before,
            h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before {
                border-top: 10px solid #37ab9d;
                content: '';
                position: absolute;
                border-right: 10px solid transparent;
                border-left: 10px solid transparent;
                bottom: -10px;
                left: 30px;
            }

       		
		


/* h3 */





	.h3modoki,
	.post h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh3):not(.post-card-title):not(#reply-title) {
		position: relative;
		padding-left:0;
		padding-bottom: 10px;
		border-top:none;
		border-bottom-width:3px;
		border-bottom-style: solid;
					border-bottom-color: #37ab9d!important;
				
							color: #37ab9d;
				background-color:transparent;
	}

	.h3modoki::after,
	.post h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh3):not(.post-card-title):not(#reply-title)::after {
		position: absolute;
		bottom: -3px;
		left: 0;
		top: inherit;
		border-top: none;
		z-index: 3;
		content: '';
		width: 5em;
		height: 3px;
		                	background-color: #37ab9d;
			}

	


/*h4*/

	
	
		.h4modoki,
		.post h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh4):not(.point) {
							border-left: 5px solid #ffc042;
										color: #37ab9d;
										background-color: #ffffff;
			
			
			
			
			
			
					}

		
	
	

/* h5 */


	
	
		.h5modoki,
		.post h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-matome):not(.rankh5):not(.point):not(.st-cardbox-t):not(.popular-t):not(.kanren-t):not(.popular-t):not(.post-card-title) {
										color: #3880ff;
										background-color: #eefaff;
			
			
							border-bottom : solid 1px #4c8dff;
			
			
							padding-left:20px!important;
			
							padding-top:10px!important;
				padding-bottom:10px!important;
			
					}

		
	
	


	
	
		.post .st-matome:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.rankh4):not(.point) {
													background-color: transparent;
			
			
			
							padding-left:20px!important;
			
							padding-top:10px!important;
				padding-bottom:10px!important;
			
					}
	

/* ウィジェットタイトル */
.post .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no),
#side .menu_underh2,
#side .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
	font-weight:bold;
	margin-bottom: 10px;
}



			.post .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no),
		#side .menu_underh2,
        #side .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no) {
			background: #4dc0b2;
			color: #ffffff;
			position: relative;
			border: none;
			margin-bottom:20px;
			text-align: center!important;
			padding-left:0px;

							padding-top:7px;
				padding-bottom:7px;
					}
		.post .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
		#side .menu_underh2::before,
        #side .st-widgets-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before {
			content: "";
			position: absolute;
			top: 100%;
			left: 50%;
 			margin-left: -10px;
			border: 10px solid transparent;
			border-top: 10px solid #4dc0b2;
		}

		

	

.wp-block-tag-cloud a,
.tagcloud a {
			color: #112605;
	
			border-color: #3880ff;
	
	}

/* NEWENTRY及び関連記事テキスト */
	.post h4.point,
	.n-entry-t {
		position: relative;
		background-color: transparent;
		margin-top: calc(2em + 30px);
		margin-bottom: 20px;
		line-height: 2em;
					border-bottom: solid 1px #37ab9d;
			}

	.post h4.point {
		margin-top: 61px;
	}

	.post h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.rankh4) .point-in,
	.n-entry {
		padding: 5px 15px;
		max-width:80%;
		box-sizing:border-box;
    	border-radius: 0 5px 0 0;
		font-size:15px;
		font-weight:bold;
		position:absolute;
		bottom:0;
		left:0;
		top:auto;
					background-color: #37ab9d;
		
					color: #ffffff;
			}

	.catname {
					background: #ffc042;
							color:#ffffff;
			}


	.catname.st-catid {
		display: none;
	}


	.post .st-catgroup a {
		color: #ffffff;
	}

	.kanren dt img {
		border:solid 5px #4dc0b2;
		box-sizing:border-box;
	}

/*グループ4
------------------------------------------------------------*/

.rssbox a {
	background-color: #3880ff;
}



	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.inyoumodoki,
	.post blockquote {
		background-color: #f3f3f3;
	}


/*タイムライン
------------------------------------------------------------*/
	.st-timeline.st-timeline-count > li,
	.st-timeline > li {
		border-left-color: #ffc042;
	}
	.st-timeline > li.has-no-text::after,
	.st-timeline > li.is-align-center::after,
	.st-timeline > li.has-text.is-align-default .st-timeline-list-text::after {
		color: #ffc042;
	}
	.st-timeline.st-timeline-count > li.has-no-text::after,
	.st-timeline.st-timeline-count > li.is-align-center::after,
	.st-timeline.st-timeline-count > li.has-text.is-align-default .st-timeline-list-text::after {
		background: #ffc042;
	}

	.st-timeline.st-timeline-count > li.has-no-text::after,
	.st-timeline.st-timeline-count > li.is-align-center::after,
	.st-timeline.st-timeline-count > li.has-text.is-align-default .st-timeline-list-text::after {
		color: #ffffff;
	}



	.st-timeline li.st-timeline-list {
		background-color: #f5f5f5;
		padding-top: 10px;
		padding-bottom: 0;
		padding-right: 20px;
	}

/* ステップ・カウント
------------------------------------------------------------*/
	.is-style-st-heading-custom-count::before,
	.is-style-st-heading-custom-step::before,
	.is-style-st-heading-custom-step::after {
 		color: #fc9d9d;
	}

	.is-style-st-heading-custom-step::after {
		border-bottom-color: #fc9d9d;
	}

.st-step {
	 		color: #fc9d9d;
				background: #ffffff;
				border-radius:5px;
	}

	.st-step::before{
		border-top-color: #ffffff;
	}

.st-step-title {
			  		border-bottom:solid 2px #5b5b5b;
	}

	.st-step-box {
		bottom: 15px;
	}

/* ポイント
------------------------------------------------------------*/
	.st-point::before {
					color: #fc9d9d;
							background: #ffffff;
			}

/*ブログカード
------------------------------------------------------------*/
/* 枠線 */
	.st-cardbox {
		border-color:#586365;
	}
	.st-cardbox {
		border-width:3px;
	}

/* ラベル */
.st-labelbox-label-text,
.st-cardbox-label-text {
			background: #ffc042;
				color: #ffffff;
	}

.st-cardbox-label-text .st-fa,
.st-cardbox-label-text .fa {
	margin-right: 5px;
}

/* PickUp（JET） */
.st-pick {
			background: #ffc042;
				color: #ffffff;
	}

#st-magazine .st-pick .st-ribon-label::before {
			border-color: transparent transparent #ffc042 #ffc042;
	}

#st-magazine .st-pick .st-ribon-label::after {
			border-color: #ffc042 transparent transparent #ffc042;
	}

/* リボン */
.st-ribon-box {
	position: relative;
	margin-bottom: 20px;
}

.st-ribon-label {
	position: absolute;
	top: 0;
	left: 0;
}

.st-ribon-text {
	display: inline-block;
	position: relative;
	height: 30px;
	line-height: 30px;
	text-align: left;
	padding: 0 15px 0 18px;
	font-size: 12px;
	box-sizing: border-box;
	font-weight: bold;
			background: #ffc042;
				color: #ffffff;
	}

.st-ribon-text::after {
	position: absolute;
	content: '';
	width: 0px;
	height: 0px;
	z-index: 1;
	top: 0;
	right: -15px;
	border-width: 15px;
	border-style: solid;
			border-color: #ffc042 transparent #ffc042 #ffc042;
	}

	/*ブログカード風 - ラベル*/
	.st-cardbox {
		margin-bottom: 20px;
		position: relative;
	}

			.st-cardbox-label {
			position: absolute;
			top: -4px;
			left: -4px;
			width: 100px;
			height: 100px;
			overflow: hidden;
		}
	
	.st-cardbox-label-text {
		white-space: nowrap;
		display: inline-block;
		position: absolute;
		padding: 7px 0;
		top: 25px;
		width: 150px;
		text-align: center;
		font-size: 90%;
		line-height: 1.2;
		font-weight: bold;
		box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
		z-index: 9999;
					left: -35px;
			-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
			}

/* カードスタイル */
.st-cardstyle .st-cardbox-label,
.st-cardstyleb .st-cardbox-label {
	position: absolute;
	top: -4px;
	left: -4px;
	width: 100px;
	height: 100px;
	overflow: hidden;
}

.st-cardstyle .st-cardbox-label-text,
.st-cardstyleb .st-cardbox-label-text {
	left: -35px;
	-webkit-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

	@media only screen and (max-width: 599px) {
		#side aside .st-cardstyleb .kanren {
			padding-top: 15px;
		}
	}

@media only screen and (max-width: 599px) {
	.st-cardstyleb .st-cardbox-label {
					position: absolute;
			top: -4px;
			left: -4px;
			rigtht: inherit;
			width: 100px;
			height: 100px;
			overflow: hidden;
			}

	.st-cardstyleb .st-cardbox-label-text {
					left: -35px;
			right: inherit;
			-webkit-transform: rotate(-45deg);
			-ms-transform: rotate(-45deg);
			transform: rotate(-45deg);
			}
}


	#st-magazine:not(.st-magazine-k) .kanren .st-top-box:not(.st-magazine-infeed) dl, /* JET */
	.st-pvm-ranking-item-image img, /* PVモニター */
	.post-card,
	.kanren:not(.st-cardbox) dt img {
		border-radius: 10px;
		overflow: hidden;
	}

	.post-card-image img,
	.st-cardstyle .kanren:not(.st-cardbox) dt img,
	.st-cardstyleb .kanren:not(.st-cardbox) dt img {
		border-radius: 10px 10px 0 0!important;
	}

	
	@media print, screen and (max-width: 599px) {
		.post-card-image .kanren:not(.st-cardbox) dt img {
			border-radius: 10px 10px 0 0!important;
		}
	}




	.content-post-slider.is-fullsize-card .post-slide-image,
	.content-post-slider.is-fullsize-text .post-slide-image {
		border-radius: 10px;
		overflow: hidden;
	}

	.content-post-slider .slider-item {
		border-radius: 10px;
		overflow: hidden;
	}

	.content-post-slider .post-slide-image .st-catgroup.itiran-category,
	.post-card-list .post-card-image .st-catgroup.itiran-category {
		padding: 10px 10px 0 10px;
	}

	.content-post-slider:not(.has-excerpt) .post-slide-image img,
	.post-card-list:not(.post-card-list) .post-card-image img {
		border-radius: 10px;
	}

	#st-magazine .kanren .st-top-box dt img {
    		border-radius: 10px;
	}

	#st-magazine .kanren .st-top-box:not(.st-magazine-infeed) dl {
		border-radius: 10px;
		overflow: hidden;
	}

	
	

	/** サムネイル非表示 */
	.kanren.st-cardbox.st-no-thumbnail dt{
		display: none;
	}
	.kanren.st-cardbox.st-no-thumbnail dd {
		padding-left: 0;
	}



/*ラベルボックス（ショートコード）*/
.st-labelbox {
	padding: 0;
    margin-bottom: 20px;
    position: relative;
}

	.st-labelbox-label {
		position: absolute;
		top: -4px;
		left: -4px;
		width: 100px;
		height: 100px;
		overflow: hidden;
	}

.st-labelbox-label-text {
    white-space: nowrap;
    display: inline-block;
    position: absolute;
    padding: 7px 0;
    top: 25px;
    width: 150px;
    text-align: center;
    font-size: 90%;
    line-height: 1.2;
    font-weight: bold;
			left: -35px;
		-webkit-transform: rotate(-45deg);
		-ms-transform: rotate(-45deg);
		transform: rotate(-45deg);
	    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.2);
    z-index: 9999;
}



	/* 埋め込みURL（ブログカード）アイキャッチ設定なし */
	.st-embed-cardlink .kanren.st-embed-no-thumb dt {
		display: none;
	}
	.st-embed-cardlink .kanren.st-embed-no-thumb dd {
		padding-right: 0;
		padding-left: 0;
	}

/*フリーボックスウィジェット
------------------------------------------------------------*/
.freebox {
			border-top-color: #3880ff;
				background: #eefaff;
	}

.p-entry-f {
			background: #3880ff;
				color: #ffffff;
	}

/* エリア内テキスト */

/*メモボックス
------------------------------------------------------------*/

/*スライドボックス
------------------------------------------------------------*/
	.st-slidebox-c {
		background: #f7f7f7;
	}

/*お知らせ
------------------------------------------------------------*/
/*お知らせバーの背景色*/
#topnews-box div.rss-bar {
			border-color: #3880ff;
	
			/*Other Browser*/
		background: #3880ff;
		/*For Old WebKit*/
		background: -webkit-linear-gradient( #3880ff 0%, #3880ff 100% );
		/*For Modern Browser*/
		background: linear-gradient( #3880ff 0%, #3880ff 100% );
	
			color: #ffffff;
	}

/*お知らせ日付の文字色*/
#topnews-box dt {
	color: #3880ff;
}

#topnews-box div dl dd a {
	color: #000000;
}

#topnews-box dd {
	border-bottom-color: #3880ff;
}

#topnews-box {
			background-color:transparent!important;
	}


/*追加カラー
------------------------------------------------------------*/

/* ウィジェット
footer .custom-html-widget, 
footer .custom-html-widget a,*/
#footer li.cat-item a::after, /* STINGERカテゴリー */
#footer li.cat-item a,
footer #sidebg li a::before,
#footer .footerlogo a, /* フッターロゴ */
#footer .footerlogo,
#footer .footer-description a, /* フッター説明 */
#footer .footer-description,
#footer .head-telno a, /* フッターの電話番号 */
#footer .head-telno, /* フッターの電話番号 */
#footer .widget_archive ul li, /* アーカイブ */
#footer .widget_archive ul li a,
#footer .widget_recent_entries ul li a, /* 最近の投稿 */
#footer .widget_recent_entries ul li,
#footer .widget_recent_comments li a, /* 最近のコメント */
#footer .widget_recent_comments li,
#footer .widget_categories ul li a, /* カテゴリー（デフォルト） */
#footer .widget_categories ul li,
#footer .rankh3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no),
#footer .st_side_rankwidgets a, /* ランキングウィジェットタイトル */
#footer .rankwidgets-cont p, /* 説明 */
#footer .kanren dd a, /* 記事一覧タイトル */
#footer .kanren .st-excerpt p, /*  記事一覧説明 */
#footer .kanren .blog_info p, /*  記事一覧日付 */
#footer .kanren:not(.st-cardbox) .clearfix dd .blog_info p i, /*  記事一覧 日時アイコン */
footer .footer-l div:not(.st-footer-tel):not(.headbox) *,
footer .footer-l a,
#footer .menu-item a,
#footer .footermenust a,
#footer .copyr,
#footer .copyr a,
#footer .copy,
#footer .copy a {
	color: #ffffff !important;
}
#footer li.cat-item a,
#footer .widget_recent_entries ul li,
#footer .widget_archive ul li {
	border-bottom: 1px solid #ffffff;
}


#footer #newsin dt, /* お知らせ日時 */
#footer #newsin dd a, /* お知らせ日テキスト*/
#footer #newsin dd, /* お知らせ日ボーダー */
#footer .cat-item a,
#footer .tagcloud a {
			color: #ffffff;
		border-color: #ffffff;
	}

#footer .p-entry,
#footer .st-widgets-title {
			color: #ffffff;
		font-weight: bold;
}

	footer .footermenust li {
		border-right-color: #ffffff !important;
	}

/* フッター一括ウィジェット */
#st-footer-under-widgets-box-wrap #st-footer-under-widgets-box {
	text-align: center;
	padding: 10px 0 10px;
}

#st-footer-under-widgets-box {
	margin:0 auto;
}


#st-footer-under-widgets-box-wrap #st-footer-under-widgets-box {
	}

/*フッター背景色*/



	#footer {
		max-width:100%;
	}

	#footer-wrapper {
		max-width:100%;
					/*Other Browser*/
			background: #ffc042;
			/* Android4.1 - 4.3 */
			background: url(""), -webkit-linear-gradient(left,  #ffc042 0%,#ffc042 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: url(""), linear-gradient(to left,  #ffc042 0%,#ffc042 100%);

				}

	


/*任意の人気記事
------------------------------------------------------------*/
.st-pvm-ranking-item-image::before, /* PVモニター */
.poprank-no {
			background: #ffc042;
				color: #ffffff!important;
	}

#content-w .post .p-entry,
#content-w .p-entry,
#side .p-entry,
.home-post .p-entry {
			background: #ffffff;
				color: #ffffff;
		border-radius: 0 0 4px 0;
}

.pop-box, .nowhits .pop-box, .nowhits-eye .pop-box,
.st-eyecatch + .nowhits .pop-box {
			border-top-color: #ffffff;
				background: #ffffff;
	}

	#content-w .p-entry::after {
		border-bottom: 5px solid #ffffff;
		border-left: 5px solid #ffffff;
	}

.pop-box:not(.st-wpp-views-widgets),
#side aside .kanren.pop-box:not(.st-wpp-views-widgets) {
			padding:20px 20px 10px;
	}

.pop-box:not(.st-wpp-views-widgets),
#side aside .kanren.pop-box:not(.st-wpp-views-widgets) {
		padding:30px 20px 10px;
		border: none;
}


	.poprank-no2,
	.poprank-no {
			background: #ffc042;
				color: #ffffff!important;
		}


/*WordPressPopularPosts連携*/

#st-magazine .st-wp-views, /*CARDs JET*/
#st-magazine .st-wp-views-limit, /*CARDs JET*/
.st-wppviews-label .wpp-views, /*Ex*/
.st-wppviews-label .wpp-views-limit, /*Ex*/
.st-wpp-views-widgets .st-wppviews-label .wpp-views {
			color: #ffffff;
				background:#ffc042;
	}

/*ウィジェット問合せボタン*/

.st-formbtn {
			border-radius: 3px;
	
	
			/*Other Browser*/
		background: #3880ff;
	}

	.st-formbtn .st-originalbtn-l {
		border-right-color: #ffffff;
	}

	a.st-formbtnlink {
		color: #ffffff;
	}

/*ウィジェットオリジナルボタン*/

.st-originalbtn {
			border-radius: 3px;
	
	
			/*Other Browser*/
		background: #3880ff;
	}

	.st-originalbtn .st-originalbtn-l {
		border-right-color: #ffffff;
	}

	a.st-originallink {
		color: #ffffff;
	}


/*ミドルメニュー
------------------------------------------------------------*/
	.st-middle-menu ul {
					/*Other Browser*/
			background: #37ab9d;
			/* Android4.1 - 4.3 */
			background: -webkit-linear-gradient(left,  #37ab9d 0%,#37ab9d 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: linear-gradient(to left,  #37ab9d 0%,#37ab9d 100%);

				}

.st-middle-menu .menu li a{
			color: #ffffff;
	}


	
					.st-middle-menu ul{
				border-top: 1px solid #ffffff;
			}
			.st-middle-menu .menu > li {
				border-bottom: 1px solid #ffffff;
			}
			.st-middle-menu .menu > li:nth-child(odd){
				border-right: 1px solid #ffffff;
			}
		
	

/*サイドメニューウィジェット
------------------------------------------------------------*/
/*背景色*/
#sidebg {
			background: #eefaff;
		}

/*liタグの階層*/
#side aside .st-pagelists ul li:not(.sub-menu) {
			border-color: #4dc0b2;
	}

#side aside .st-pagelists ul .sub-menu li {
	border: none;
}

#side aside .st-pagelists ul li:last-child {
			border-bottom: 1px solid #4dc0b2;
	}

#side aside .st-pagelists ul .sub-menu li:first-child {
			border-top: 1px solid #4dc0b2;
	}

#side aside .st-pagelists ul li li:last-child {
	border: none;
}

#side aside .st-pagelists ul .sub-menu .sub-menu li {
	border: none;
}


#side aside .st-pagelists ul li a {
			color: #ffffff;
				/*Other Browser*/
		background: #ffc042;
		/* Android4.1 - 4.3 */
		background: url(""), -webkit-linear-gradient(left,  #ffc042 0%,#ffc042 100%);

		/* IE10+, FF16+, Chrome26+ */
		background: url(""), linear-gradient(to left,  #ffc042 0%,#ffc042 100%);

	}

	#side aside .st-pagelists ul li a {
		font-weight:bold;
	}
	#side aside .st-pagelists ul li li a {
		font-weight:normal;
	}



#side aside .st-pagelists .sub-menu > li:last-child:has(> ul) a,
#side aside .st-pagelists .sub-menu a {
			border-bottom-color: #4c8dff;
		color: #3880ff;
}

	#side aside .st-pagelists .sub-menu .sub-menu li:last-child {
		border-bottom: 1px solid #4c8dff;
	}
	:root #side aside .st-pagelists > ul > li:last-child > .sub-menu > .sub-menu > li:last-child {
		border-bottom: none;
	}

#side aside .st-pagelists .sub-menu li .sub-menu a,
#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a {
	color: #3880ff;
}

	#side aside .st-pagelists .sub-menu li .sub-menu a:hover,
	#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a:hover,
	#side aside .st-pagelists .sub-menu a:hover {
		opacity:0.8;
		color: #3880ff;
	}


	#side aside .st-pagelists ul li a {
		padding-left:15px;
	}

	#side aside .st-pagelists ul li a {
		padding-top:8px;
		padding-bottom:8px;
	}

/*Webアイコン*/
	#side aside .st-pagelists ul li a::before {
					content: "\f138";
				font-family: stsvg;
		margin-right: 5px;
									color:#ffffff;
					
	}
	#side aside .st-pagelists li li a::before {
		content: none;
	}

	#side aside .st-pagelists li li a::before {
		content: "\f105";
		font-family: stsvg;
		font-size: .7em;
		margin-right: 5px;
					color:#3880ff;
			}

.wpcf7-submit {
			background: #3880ff;
				color: #ffffff;
	}

/*-------------------------------------
記事ごとのヘッダー（EX）
--------------------------------------*/

/* 記事情報を表示*/
#st-header-post-under-box.st-header-post-data {
	display: flex;
	flex-wrap: wrap;
			justify-content: flex-start;
		align-items: center;
}

#st-header-post-under-box.st-header-post-data .st-content-width {
			width: 100%;
		padding:15px;
	box-sizing: border-box;
}

	#st-header-post-under-box .blogbox p,
	#st-header-post-under-box .entry-title {
		color: #5b5b5b;

	}


/* ヘッダー画像上エリア */
#st-header-top-widgets-box .st-content-width {
	text-align:center;
	margin: 0 auto;
	padding:7px 10px;
	}

#st-header-top-widgets-box .st-content-width .st-marquee { /* マーキー */
	padding: 0;
}

#st-header-top-widgets-box {
		
}

#st-header-top-widgets-box .st-content-width p {
	margin-bottom: 0;
}


#st-header-top-widgets-box .st-content-width a:hover {
	opacity: 0.7;
}

/* ヘッダー画像エリア */

			#st-header.header-video-player {
			min-height: 300px;
		}
	
			@media only screen and (max-width: 599px) {
			#st-header.header-video-player {
				min-height: 230px;
			}
		}
	

/* ヘッダー画像エリア下ウィジェット */
#st-header-bottom-category {
	overflow: hidden;
	padding: 5px 0;
}

#st-header-bottom-category .content-post-slider,
#st-header-bottom-category .post-card-list {
    margin-right: 0;
    margin-left: 0;
    width: 100%;
	max-width: 100%;
	overflow: hidden;
}

@media print, screen and (max-width: 959px) {
	#st-header-bottom-category {
					padding: 0;
			}
}

#st-header-bottom-category .slick-track,
#st-header-bottom-category .slick-list {
	display: flex;
}

#st-header-under-widgets-box .slider {
	padding-top: 15px;
}


	#st-header-under-widgets-box .content-post-slider .post-slide-image,
	#st-header-under-widgets-box .post-card-list .post-card-image,
	#st-header-under-widgets-box img {
		border-radius: 10px;
	}

			#st-header-under-widgets-box .content-post-slider .post-slide-image
			{
			box-shadow: 0 2px 5px rgb(0, 0, 0, .3);
		}

/* ヘッダーカード */


/* メイン画像背景色 */


/*強制センタリング・中央寄せ
------------------------------------------------------------*/
	    
                .entry-content .h2modoki,
        .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no),
        .colum1 .entry-content .h2modoki,
        .colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)
        {
                margin-left: -15px;
                margin-right: -15px;
									padding-left:20px;
					padding-right:20px;
				        }
    
        

/*目次
------------------------------------------------------------*/
/* 目次 */
	.st_toc_back_icon::before,
	.st_toc_back,
	.st_toc_back:focus,
	.st_toc_back:hover,
	.st_toc_back:active {
		color: #ffc042;
	}

	.st_toc_back.is-rounded {
		background-color: #ffc042;
	}
	.st_toc_back.is-rounded .st_toc_back_icon::before {
		color: #fff;
	}

/*media Queries タブレットサイズ（959px以下）
----------------------------------------------------*/
@media only screen and (max-width: 959px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

	
		
	
	
	
	
	/*
	旧st-kanri.phpより移動（ここまで）
	-------------------------------------------*/

	/* ヘッダー画像/記事スライドショー横並び */
			#st-header {
			overflow: hidden;
		}
	
	/*-- ここまで --*/
}

/*media Queries タブレットサイズ以上
----------------------------------------------------*/
@media only screen and (min-width: 600px) {

    /*-------------------------------------------
    旧st-kanri.phpより移動（ここから）
    */

    
    
				
		
		main .kanren:not(.st-cardbox) dt {
							float: left;
			
							width: 150px;
					}

		main .kanren:not(.st-cardbox) dt img {
							width: 150px;
					}

		main .kanren:not(.st-cardbox) dd {
												padding-left: 165px;
									}

		main #magazine .kanren:not(.st-cardbox) dd {
			padding-left: 20px;
		}
		/*view数*/
		.st-wppviews-label .wpp-views,
		.st-wppviews-label .wpp-views-limit {
			font-size: 90%;
		}

		.youtube_thum_link_150 {
							width: 150px;
			
					}

		#side .youtube_thum_link_150 {
			width: 100px;
			height: 100px;
		}

		
	
			/*PVモニター*/
		main .st-pvm-ranking-item-image {
							width: 150px;
					}

		.st-pvm-ranking-item-image img{
				width: 100%;
		}

		
	
	
			/* YouTubeサムネイル */
		.youtube_thum_link_150 {
							width: 150px;
				height: 100px;
					}

		main .kanren:not(.st-cardbox) dt {
							float: left;
			
							width: 200px;
					}

		main .kanren:not(.st-cardbox) dt:not(.st-cardbox) img {
							width: 200px;
					}

		main .kanren:not(.st-cardbox) dd {
												padding-left: 215px;
									}

		#magazine .kanren:not(.st-cardbox) dd {
			padding-left: 20px;
		}

		/*PVモニター*/
		main .st-pvm-ranking-item-image {
							width: 200px;
					}
	
		
	
            /*TOC+*/
        #toc_container > ul > li {
            font-size: 21px;
        }
    
    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/
	/* 目次 */
	#st_toc_container:not(.st_toc_contracted):not(.only-toc),
	#toc_container:not(.contracted) { /* 表示状態 */
					padding:20px 30px 30px;
			}

	/*強制センタリング・中央寄せ
	------------------------------------------------------------*/
				
						.entry-content .h2modoki,
			.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)
			{
				margin-left: -30px;
				margin-right: -30px;
									padding-left:30px;
					padding-right:30px;
							}
			.colum1 .entry-content .h2modoki,
			.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)
			{
				margin-left: -20px;
				margin-right: -20px;
									padding-left:20px;
					padding-right:20px;
							}

			        		.entry-content .h2modoki::before,
        		.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
        		.entry-content .h2modoki::after,
        		.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::after
        		{
                	left:65px;
        		}
        		.colum1 .entry-content .h2modoki::before,
        		.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
        		.colum1 .entry-content .h2modoki::after,
        		.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::after
        		{
                	left:55px;
        		}
						
				
}

/*media Queries タブレットサイズ（600px～959px）のみで適応したいCSS -タブレットのみ
---------------------------------------------------------------------------------------------------*/
@media only screen and (min-width: 600px) and (max-width: 959px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 18px;
	    line-height: 30px;
	}
	/* 記事一覧 */
	dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*TOPとアーカイブ*/
	main .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a { /*関連記事*/
	    font-size: 18px;
	    line-height: 26px;
	}

    
    /*基本のフォントサイズ*/
	.post pre,
	.post .wp-block-details summary,
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
	.post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
	.post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
	.post h5.has-st-regular-font-size,
    .post .entry-content h6,
	.post h6.has-st-regular-font-size,
	.st-tab-content > label, /* タブ */
	.st-tabs__tab-list-item /* タブブロック */
	{
					}

	/* スライドの抜粋 */
	.post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
					}

    /* 記事タイトル */
	.st-header-post-data .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2) {
				    }

    /* H2 */
	.post .entry-content h2.has-st-regular-font-size,
    .post .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
    .post .entry-content .h2modoki{
				    }

    /* H3 */
	.post .entry-content h3.has-st-regular-font-size,
    .post .entry-content h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
				    }

    /* H4 */
	.post .entry-content h4.has-st-regular-font-size,
    .post .entry-content h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.point),
    .post .entry-content .h4modoki {
				    }

    /* 記事一覧 */
	.no-thumbitiran h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
	dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ */
	.kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*関連記事*/-no2) a
	.st-tab-category .post-card-list .post-card-title a, /* タブ式カテゴリー */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a {
				    }

		
	/*
	旧st-kanri.phpより移動（ここまで）
	-------------------------------------------*/

/*-- ここまで --*/
}


/*media Queries PCサイズ
----------------------------------------------------*/
@media only screen and (min-width: 960px) {

	/*-------------------------------------------
	旧st-kanri.phpより移動（ここから）
	*/

    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 16px;
	    line-height: 26px;
	}
	/* 記事一覧 */
	dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*TOPとアーカイブ*/
	main .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a { /*関連記事*/
	    font-size: 16px;
	    line-height: 26px;
	}

    
    /*基本のフォントサイズ*/
	.post pre,
	.post .wp-block-details summary,
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
	.post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
	.post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
	.post h5.has-st-regular-font-size,
    .post .entry-content h6,
	.post h6.has-st-regular-font-size,
	.st-tab-content > label, /* タブ */
	.st-tabs__tab-list-item /* タブブロック */
	{
					font-size: 16px;
							line-height: 34px;
			}

	/* スライドの抜粋 */
	.post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
	.post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
					font-size: 13px;
							line-height: 18px;
			}

    /* 記事タイトル */
	.st-header-post-data .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2) {
					font-size: 28px;
							line-height: 41px;
		    }

    /* H2 */
	.post .entry-content h2.has-st-regular-font-size,
    .post .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
    .post .entry-content .h2modoki{
					font-size: 24px;
				    }

    /* H3 */
	.post .entry-content h3.has-st-regular-font-size,
    .post .entry-content h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
					font-size: 22px;
				    }

    /* H4 */
	.post .entry-content h4.has-st-regular-font-size,
    .post .entry-content h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.point),
    .post .entry-content .h4modoki {
					font-size: 18px;
				    }

    /* 記事一覧 */
	.no-thumbitiran h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
    dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ */
	.kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*関連記事*/
	.st-tab-category .post-card-list .post-card-title a, /* タブ式カテゴリー */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .post .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a {
				    }
	/* サイドバー記事一覧 */
	#footer .kanren .clearfix dd h5 a,
	#side dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a,
	#side .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a {
		font-size: .95em!important;
	}

	/*--------------------------------
	全体のサイズ
	---------------------------------*/

	.st-content-width, /* 汎用 */
	#st-menuwide, /*メニュー*/
	nav.smanone,
	nav.st5,
	#st-header-cardlink,
	#st-menuwide div.menu,
	#st-menuwide nav.menu,
	#st-header, /*ヘッダー*/
	#st-header-under-widgets-box, /*ヘッダー画像下ウィジェット*/
	#st-footer-under-widgets-box, /*フッター一括ウィジェット*/
	#content, /*コンテンツ*/
	#footer-in /*フッター*/
	 {
		max-width:1116px;
	}

	 /* LPワイド */
	.st-lp-wide #content,
	.st-lp-wide #footer
	 {
		max-width:100%;
	}

	#headbox
	 {
		max-width:1096px;
	}

	.st-content-width {
		margin: 0 auto;
	}

	
	/*1カラムの幅のサイズ*/
	.colum1:not(.st-lp-wide) .st-content-width, /* 記事ごとのヘッダー */
	.colum1:not(.st-lp-wide) #st-header-cardlink, /* ヘッダーカードリンク */
	.colum1:not(.st-lp-wide) #st-header-under-widgets-box,
	.colum1:not(.st-lp-wide) #st-footer-under-widgets-box,
	.colum1:not(.st-lp-wide) #content {
    	max-width: 1116px;
	}

	.colum1.lp:not(.st-lp-wide) footer{
    	max-width: 1116px;
		margin: 0 auto;
	}

	/* ワイドLPの左右にシャドウ -EX */
	.colum1.st-lp-wide #st-header,
	.colum1.st-lp-wide .wp-block-cover__inner-container, /* カバーブロック */
	.colum1.st-lp-wide #content .wp-block-group.is-style-st-wide-background .wp-block-group__inner-container, /* Gutenbergグループボックス ワイド有効時 */
	.colum1.st-lp-wide #content .wp-block-cover.alignfull .wp-block-cover__inner-container, /* Gutenbergカバーボックス 幅広 */
	.colum1.st-lp-wide #content .st-lp-wide-content,
	.colum1.st-lp-wide #content .rankh3,
	.colum1.st-lp-wide #content .rank-guide,
	.colum1.st-lp-wide #content .rankid1,
	.colum1.st-lp-wide #content .rankid2,
	.colum1.st-lp-wide #content .rankid3,
	.colum1.st-lp-wide #content .rankst-box,
	.colum1.st-lp-wide .rankst-wrap,
	.colum1.st-lp-wide .widget_text,
	.colum1.st-lp-wide .top-wbox-u,
	.colum1.st-lp-wide .entry-title,
	.colum1.st-lp-wide #st-page .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
	.colum1.st-lp-wide #breadcrumb,
	.colum1.st-lp-wide .blogbox,
	.colum1.st-lp-wide .st-catgroup,
	.colum1.st-lp-wide .adbox,
	.colum1.st-lp-wide .st-widgets-box,
	.colum1.st-lp-wide .sns,
	.colum1.st-lp-wide .tagst,
	.colum1.st-lp-wide aside,
	.colum1.st-lp-wide .kanren,
	.colum1.st-lp-wide #topnews-box,
	.colum1.st-lp-wide .st-tab-category
	{
    	max-width: 1116px;
		margin-left: auto;
		margin-right: auto;
		box-sizing: border-box;
	}

	.colum1.st-lp-wide .kanren.st-cardbox,
	.colum1.st-lp-wide .kanren.shortcode-kanren {
		max-width: inherit;
	}

	.st-lp-wide .st-lp-wide-wrapper {
    	margin-bottom: 20px;
	}

	
	/* ヘッダー画像/記事スライドショー横並び */
			#header-slides .slick-list {
			overflow: visible !important;
		}
		#st-headerbox {
			overflow:hidden;
		}
	
	
	
        /*--------------------------------
        PCのレイアウト（右サイドバー）
        ---------------------------------*/

        #contentInner {
            float: left;
            width: 100%;
            margin-right: -300px;
        }

        main {
            margin-right: 320px;
            margin-left: 0px;
            background-color: #fff;
            border-radius: 4px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            padding: 30px 50px 30px;
        }

        #side aside {
            float: right;
            width: 300px;
            padding: 0px;
        }


    
    /**
     * サイト名とキャッチフレーズ有無の調整
     */

    
    
            #header-r .footermenust {
            margin: 0;
        }
    
    
            #st-headwide #headbox {
			display: flex;
			justify-content: center;
							text-align: center;
			        }
    
    
            /*TOC+*/
        #toc_container {
            padding-left: 30px;
            padding-right: 30px;
        }

        #toc_container > ul > li {
            font-size: 16px;
        }
    
    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/

	/*TOC+*/
	#toc_container:not(.contracted) { /* 表示状態 */
							padding:20px 40px 10px;
			}

	/*ヘッダーの背景色*/
	
	
	/* メイン画像100% */
	
	/*wrapperに背景がある場合*/
	
	/*メニュー*/
	#st-menuwide {
					border-top-color: #4dc0b2;
			border-bottom-color: #4dc0b2;
		
					border-left-color: #ffffff;
			border-right-color: #ffffff;
			}

	
	
	#st-menuwide {
		
					/*Other Browser*/
			background: #4dc0b2;
			/* Android4.1 - 4.3 */
			background: url(""), -webkit-linear-gradient(left,  #4dc0b2 0%,#4dc0b2 100%);

			/* IE10+, FF16+, Chrome26+ */
			background: url(""), linear-gradient(to left,  #4dc0b2 0%,#4dc0b2 100%);
			}

	
			header .smanone ul.menu li{
			width: 160px;
		}
		header .smanone ul.sub-menu li ul.sub-menu{
			left: 160px;
		}
	
	header .smanone ul.menu li,
	header nav.st5 ul.menu  li,
	header nav.st5 ul.menu  li,
	header #st-menuwide div.menu li,
	header #st-menuwide nav.menu li
	{
			border-right-color: #ffffff;
		}

	header .smanone ul.menu li li,
	header nav.st5 ul.menu li li,
	header #st-menuwide div.menu li li,
	header #st-menuwide nav.menu li li {
    	border:none;
	}

		header .smanone ul.menu li a,
	header nav.st5 ul.menu  li a,
	header #st-menuwide div.menu li a,
	header #st-menuwide nav.menu li a,
	header .smanone ul.menu li a:hover,
	header nav.st5 ul.menu  li a:hover,
	header #st-menuwide div.menu li a:hover,
	header #st-menuwide nav.menu li a:hover{
		color: #ffffff;
	}
	
	header .smanone ul.menu li:hover,
	header nav.st5 ul.menu  li:hover,
	header #st-menuwide div.menu li:hover,
	header #st-menuwide nav.menu li:hover{
		background: rgba(255,255,255,0.1);
	}

	header .smanone ul.menu li li a:hover,
	header nav.st5 ul.menu  li li a:hover,
	header #st-menuwide div.menu li li a:hover,
	header #st-menuwide nav.menu li li a:hover{
		opacity:0.9;
	}

			header .smanone ul.menu li a,
		header nav.st5 ul.menu  li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:bold;
		}
		header .smanone ul.menu li li a,
		header nav.st5 ul.menu  li li a,
		header #st-menuwide div.menu li a,
		header #st-menuwide nav.menu li a  {
			font-weight:normal;
		}
	
			header .smanone ul.menu li li a {
					background: #4c8dff;
				}
	
	/*メニューの上下のパディング*/
		

	/* グローバルメニュー */
			#st-menuwide {
			max-width: 100%;
					}
	
			header .smanone ul.menu {
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex;
			-webkit-justify-content: center;
			-ms-flex-pack: center;
			justify-content: center;
    		-webkit-box-lines:multiple;
    		-webkit-flex-wrap:wrap;
    		-ms-flex-wrap:wrap;
    		flex-wrap:wrap;
		}
	
			/*ヘッダーの電話番号とリンク色*/
		.head-telno a, #header-r .footermenust a {
			color: #ffffff;
		}
	
			#header-r .footermenust li {
			border-right-color: #ffffff;
		}
	
			/*トップ用おすすめタイトル*/
		.nowhits .pop-box {
			border-top-color: #ffffff;
		}
	
	/*記事エリアを広げる*/
	
	/*強制センタリング・中央寄せ
	------------------------------------------------------------*/
				
						.entry-content .h2modoki,
			.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)
			{
        							margin-left: -50px;
					margin-right: -50px;
            	
				        									padding-left:50px;
						padding-right:50px;
            									}
			.colum1 .entry-content .h2modoki,
			.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)
			{
				margin-left: -70px;
				margin-right: -70px;
									padding-left:70px;
					padding-right:70px;
							}

			
			
			
			
			
			        		.entry-content .h2modoki::before,
        		.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
        		.entry-content .h2modoki::after,
        		.entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::after
        		{
                	left:80px;
        		}
        		.colum1 .entry-content .h2modoki::before,
        		.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::before,
        		.colum1 .entry-content .h2modoki::after,
        		.colum1 .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no)::after
        		{
                	left:100px;
        		}
						
				
			#side .smanone.st-excerpt {
			display:none;
		}
	
/*-- ここまで --*/
}

/*media Queries スマホのみ（599px）以下
---------------------------------------------------------------------------------------------------*/
@media only screen and (max-width: 599px) {

    /*-------------------------------------------
    旧st-kanri.phpより移動（ここから）
    */

    /*--------------------------------
    各フォント設定
    ---------------------------------*/

	/* ブログカード */
	.post dd h5.st-cardbox-t {
	    font-size: 16px;
		line-height: 24px;
	}
	/* 記事一覧 */
	dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*TOPとアーカイブ*/
	.kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a { /*関連記事*/
	    font-size: 17px;
		line-height: 24px;
	}

    
    /*基本のフォントサイズ*/
	.post pre,
	.post .wp-block-details summary,
    .post .entry-content p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn), /* テキスト */
    .post .entry-content .st-kaiwa-hukidashi, /* ふきだし */
    .post .entry-content .st-kaiwa-hukidashi2, /* ふきだし */
    .post .entry-content .yellowbox, /* 黄色ボックス */
    .post .entry-content .graybox, /* グレーボックス */
    .post .entry-content .redbox, /* 薄赤ボックス */
    .post .entry-content #topnews .clearfix dd p, /* 一覧文字 */
    .post .entry-content ul li, /* ulリスト */
    .post .entry-content ol li, /* olリスト */
    .post .entry-content #st_toc_container > ul > li, /* 目次用 */
    .post .entry-content #comments #respond, /* コメント */
    .post .entry-content #comments h4, /* コメントタイトル */
	.post .entry-content h5:not(.kanren-t):not(.popular-t):not(.st-cardbox-t), /* H5 */
	.post h5.has-st-regular-font-size,
    .post .entry-content h6,
	.post h6.has-st-regular-font-size,
	.st-tab-content > label, /* タブ */
	.st-tabs__tab-list-item /* タブブロック */
	{
                    font-size: 17px;
                    }

    /* スライドの抜粋 */
    .post .entry-content .post-slide-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .st-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .st-card-excerpt p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn),
    .post .entry-content .kanren:not(.st-cardbox) .clearfix dd p:not(.p-entry-t):not(.p-free):not(.sitename):not(.post-slide-title):not(.post-slide-date):not(.post-slide-more):not(.st-catgroup):not(.wp-caption-text):not(.cardbox-more):not(.st-minihukidashi):not(.st-mybox-title):not(.st-memobox-title):not(.st-mybtn){
                    font-size: 13px;
                    }

    /* 記事タイトル */
	.st-header-post-data .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2),
    #contentInner .post .entry-title:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no):not(.st-css-no2) {
                    }

	
    /* H2 */
	.post .entry-content h2.has-st-regular-font-size,
    .post .entry-content h2:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2),
    .post .entry-content .h2modoki{
                    }

    /* H3 */
	.post .entry-content h3.has-st-regular-font-size,
    .post .entry-content h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.post-card-title):not(#reply-title),
    .post .entry-content .h3modoki {
                    }

    /* H4 */
	.post .entry-content h4.has-st-regular-font-size,
    .post .entry-content h4:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2):not(.point),
	.post .entry-content .h4modoki {
                    }

    /* 記事一覧 */
	.no-thumbitiran h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ（サムネイル無し） */
	.no-thumbitiran h5 a, /* ショートコード一覧（サムネイル無し） */
	dd h3:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /* TOP・アーカイブ */
	.kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a, /*関連記事*/-no2) a
	.st-tab-category .post-card-list .post-card-title a, /* タブ式カテゴリー */
	.post-card-list .post-card-title a, /* カードタイプEX */
	#st-magazine .kanren .st-top-box dd h3, /* JET */
    .kanren .clearfix dd h5:not([class^="is-style-st-heading-custom-"]):not([class*=" is-style-st-heading-custom-"]):not(.st-css-no2) a {
				    }

	
    /*
    旧st-kanri.phpより移動（ここまで）
    -------------------------------------------*/

	
/*-- ここまで --*/
}


/*-------------------------------------------
旧st-kanri.phpより移動（ここから）
*/


/*
旧st-kanri.phpより移動（ここまで）
-------------------------------------------*/

/*
Gutenberg調整
-------------------------------------------*/

/* ワイドアライメント */
.wp-block-cover.alignwide,
.alignfull {
	margin-left: -15px;
	margin-right: -15px;
}

@media only screen and (min-width: 600px) {
	.wp-block-cover.alignwide,
	.alignfull {
		margin-left: -30px;
		margin-right: -30px;
	}
}

@media print, screen and (min-width: 960px) {
	.wp-block-cover.alignwide,
	.alignfull {
					margin-left: -50px;
			margin-right: -50px;
		 	}
	/* 1カラム */
	.colum1 .wp-block-cover.alignwide,
	.colum1 .alignfull {
		margin-left: -70px;
		margin-right: -70px;
	}
}

/** カバーブロック */
.wp-block-cover.alignwide,
.wp-block-cover.alignfull {
	width: calc( 100% + 30px );
	max-width: calc( 100% + 30px );
	padding-left: 30px;
	padding-right: 30px;
}

@media only screen and (min-width: 600px) {
	.wp-block-cover.alignwide,
	.wp-block-cover.alignfull {
		width: calc( 100% + 60px );
		max-width: calc( 100% + 60px );
		padding-left: 70px;
		padding-right: 70px;
	}
}

@media print, screen and (min-width: 960px) {
	.wp-block-cover.alignwide,
	.wp-block-cover.alignfull {
					width: calc( 100% + 100px );
			max-width: calc( 100% + 100px );
		 	}
	/* 1カラム */
	.colum1 .wp-block-cover.alignwide,
	.colum1 .wp-block-cover.alignfull {
		width: calc( 100% + 140px );
		max-width: calc( 100% + 140px );
	}
}

/* 最新の記事 */

/** リスト表示 */

			.wp-block-latest-posts:not(.is-grid) li img {
							width: 150px;
					}
	

@media only screen and (min-width: 600px) and (max-width: 959px) {
	/* Tabサイズ */
	.wp-block-latest-posts li a {
	    font-size: 18px;
	    line-height: 26px;
	}

	.wp-block-latest-posts li a {
					}
}

@media only screen and (min-width: 960px) {
	/* PCサイズ */
	.wp-block-latest-posts li a {
	    font-size: 16px;
	    line-height: 26px;
	}

	.wp-block-latest-posts li a {
					}
}

@media only screen and (max-width: 599px) {
	/* スマホサイズ */
	.wp-block-latest-posts li a {
	    font-size: 16px;
		line-height: 24px;
	}

	.wp-block-latest-posts li a {
					}
}


	.acordion_search_content *,
	.acordion_search_content a {
		color: #333;
		border-color: #ccc;
	}


	.st-box-shadow {
		box-shadow: 0 1px 8px rgb(0,0,0, .1), 0 4px 4px -4px rgb(0,0,0, .1);
		box-sizing: border-box;
	}


