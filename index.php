<?php
/**
 * Created by PhpStorm.
 * User: lokang
 * Date: 23/07/16
 * Time: 7:01 PM
 */

/*
 * CSS style
 * <style type="text/css">
 * </style>
 */
//style
//$cssStyle = "Css style begins";
//style begin
$cssStyleBegin = array(
    'begin' => array(
        'begin' => '<style type="text/css">'
    ),
);
$cssStyleEnd = array(
    'end' => array(
        'end' => '</style>'
    ),
);
/*
 * css page begin
 * * {
 *  margin:0;
 * padding:0;
 * outline:none;
 * border:none;
 * color: #000000;
 * }
 */

/*
 * css body
 * body {
    background-color: lightblue;
}
 */
$cssBody = array(
    'body' => array(
        'body' => 'body'
    )
);

$cssBodyCurlybraceLt = array(
    'lt' => array(
        'lt' => '{'
    )
);

$cssBodyBackgroundColor = array(
    'background-color' => array(
        'background-color' => 'background-color'
    )
);

$cssBodyColon = array(
    'colon' => array(
        'colon' => ': '
    )
);

$cssBodyBackgroundColorName = array(
    'name' => array(
        'name' => 'white'
    )
);

$cssBodySemiColon = array(
    'semicolon' => array(
        'semicolon' => ';'
    )
);

$cssBodyCurlybraceGt = array(
    'gt' => array(
        'gt' => '}'
    )
);

echo $cssStyleBegin['begin']['begin'].$cssBody['body']['body'].$cssBodyCurlybraceLt['lt']['lt']
    .$cssBodyBackgroundColor['background-color']['background-color'].$cssBodyColon['colon']['colon']
    .$cssBodyBackgroundColorName['name']['name'].$cssBodySemiColon['semicolon']['semicolon']
    .$cssBodyCurlybraceGt['gt']['gt'].$cssStyleEnd['end']['end'];
/*
 * css div
 * #body{
 *  background-color: yellow;
 * }
 */
$cssDivBodyHash = array(
    'hash' => array(
        'hash' => '#'
    )
);
$cssDivBody = array(
    'body' => array(
        'body' => 'body'
    )
);
$cssDivBodyTagBegin = array(
    'begin' => array(
        'begin' => '{'
    )
);

$cssDivBodyBackgroundColor = array(
    'background-color' => array(
        'background-color' => 'background-color'
    )
);

$cssDivBodyColon = array(
    'colon' => array(
        'colon' => ': '
    )
);

$cssDivBodyColorNameYellow = array(
    'name' => array(
        'name' => 'yellow'
    )
);

$cssDivBodySemiColon = array(
    'semicolon' => array(
        'semicolon' => ';'
    )
);

$cssDivBodyTagEnd = array(
    'end' => array(
        'end' => '}'
    )
);

echo $cssStyleBegin['begin']['begin'].$cssDivBodyHash['hash']['hash']
    .$cssDivBody['body']['body'].$cssDivBodyTagBegin['begin']['begin']
    .$cssDivBodyBackgroundColor['background-color']['background-color'].$cssDivBodyColon['colon']['colon']
    .$cssDivBodyColorNameYellow['name']['name']
    .$cssDivBodySemiColon['semicolon']['semicolon'].$cssDivBodyTagEnd['end']['end']
    .$cssStyleEnd['end']['end'];


/*
 * css div
 * #nyikge{
 *  background-color: yellow;
 * }
 */
$cssDivNyikgeHash = array(
    'hash' => array(
        'hash' => '#'
    )
);
$cssDivNyikge = array(
    'body' => array(
        'body' => 'body'
    )
);
$cssDivNyikgeTagBegin = array(
    'begin' => array(
        'begin' => '{'
    )
);

$cssDivNyikgeBackgroundColor = array(
    'background-color' => array(
        'background-color' => 'background-color'
    )
);

$cssDivNyikgeColon = array(
    'colon' => array(
        'colon' => ': '
    )
);

$cssDivNyikgeColorName = array(
    'name' => array(
        'name' => 'white'
    )
);

$cssDivNyikgeSemiColon = array(
    'semicolon' => array(
        'semicolon' => ';'
    )
);

$cssDivNyikgeTagEnd = array(
    'end' => array(
        'end' => '}'
    )
);

echo $cssStyleBegin['begin']['begin'].$cssDivNyikgeHash['hash']['hash']
    .$cssDivNyikge['body']['body'].$cssDivNyikgeTagBegin['begin']['begin']
    .$cssDivNyikgeBackgroundColor['background-color']['background-color'].$cssDivNyikgeColon['colon']['colon']
    .$cssDivNyikgeColorName['name']['name']
    .$cssDivNyikgeSemiColon['semicolon']['semicolon'].$cssDivNyikgeTagEnd['end']['end']
    .$cssStyleEnd['end']['end'];

/*
 * css page
 *  p {
 * color: green;
 * }
 */
//css page
$cssPageTagName = array(
    'name' => array(
        'name' => 'p'
    )
);
$cssPageTagBegin = array(
    'begin' => array(
        'begin' => '{'
    )
);
$cssPageTagColor = array(
    'color' => array(
        'color' => 'color: green; '
    )
);

$cssPageTagEnd = array(
    'end' => array(
        'end' => '}'
    )
);

echo $cssStyleBegin['begin']['begin'].$cssPageTagName['name']['name'].$cssPageTagBegin['begin']['begin']
    .$cssPageTagColor['color']['color'].$cssPageTagEnd['end']['end'].$cssStyleEnd['end']['end'];


/*
 * css class
 *  .class {
 * color: green;
 * }
 */
//css class
$cssClassTagName = array(
    'name' => array(
        'name' => '.class'
    )
);
$cssClassTagBegin = array(
    'begin' => array(
        'begin' => '{'
    )
);
$cssClassTagColor = array(
    'color' => array(
        'color' => 'color'
    )
);
$cssClassTagColon = array(
    'colon' => array(
        'colon' => ':'
    )
);
$cssClassTagColorNameBrown = array(
    'brown' => array(
        'brown' => 'brown'
    )
);
$cssClassTagColorNameYellow = array(
    'yellow' => array(
        'yellow' => 'yellow'
    )
);
$cssClassTagSemicolon = array(
    'semicolon' => array(
        'semicolon' => ';'
    )
);
$cssClassTagEnd = array(
    'end' => array(
        'end' => '}'
    )
);

echo $cssStyleBegin['begin']['begin'].$cssClassTagName['name']['name'].$cssClassTagBegin['begin']['begin']
.$cssClassTagColor['color']['color']
    .$cssClassTagColon['colon']['colon'].$cssClassTagColorNameBrown['brown']['brown']
    .$cssClassTagSemicolon['semicolon']['semicolon'].$cssClassTagEnd['end']['end'].$cssStyleEnd['end']['end'];


/*
 * HTML Tags that creates pages
 * begin and end tags
 * title
 * head
 * page
 */
/*
 * page titles
 * <title></title>
 */
$title = "pangikwara";
/*
 * title begin
 * <title>
 */
$titleBegin = array(
    'begin' => array(
        'begin' => '<title>'
    ),
);
/*
 * title end
 * </title>
*/
$titleEnd = array(
    'end' => array(
        'end' => '</title>'
    ),
);
echo $titleBegin['begin']['begin'] . $title . $titleEnd['end']['end'];
/*
 * List of head tags from h1 - h6
 */
//html tags headings
$htmlHead = "List of head tags from h1 - h6";
//head end
$htmlHeadBegin = array(
    'h1' => array(
        'h1' => '<h1>'
    ),
    'h2' => array(
        'h2' => '<h2>'
    ),
    'h3' => array(
        'h3' => '<h3>'
    ),
    'h4' => array(
        'h4' => '<h4>'
    ),
    'h4' => array(
        'h5' => '<h5>'
    ),
    'h6' => array(
        'h6' => '<h6>'
    ),
);

$htmlHeadEnd = array(
    'h1' => array(
        'h1' => '</h1>'
    ),
    'h2' => array(
        'h2' => '</h2>'
    ),
    'h3' => array(
        'h3' => '</h3>'
    ),
    'h4' => array(
        'h4' => '</h4>'
    ),
    'h4' => array(
        'h5' => '</h5>'
    ),
    'h6' => array(
        'h6' => '</h6>'
    ),
);
echo $htmlHeadBegin['h1']['h1'].$htmlHead.$htmlHeadEnd['h1']['h1'];
/*
 * html body
 * begin <body>
 * end </body>
 */
//body
$htmlBody = "Body starts here";
//begin
$htmlBodyBegin = array(
    'begin' => array(
        'begin' => '<body>'
    ),
);
//end html body
$htmlBodyEnd = array(
    'end' => array(
        'end' => '</body>'
    ),
);
echo $htmlBodyBegin['begin']['begin'].$htmlBodyEnd['end']['end'];
/*
 * page begin and end
 * page message
 */
$htmlPage = "We working on our future software. Please send in your contribution.";

//page begin and end tags
$htmlPageBegin = array(
    'begin' => array(
        'begin' => '<p>'
    ),
);

$htmlPageEnd = array(
    'end' => array(
        'end' => '</p>'
    ),
);

$break = array(
    'break' => array(
        'break' => '<br />'
    )
);

/*
 * <p class="center large">This paragraph refers to two classes.</p>
 */

$htmlClassBegin = array(
    'begin' => array(
        'begin' => '<span class="class">'
    )
);

$htmlClassEnd = array(
    'end' => array(
        'end' => '</span>'
    )
);

/*
 * <div = "id"></div>
 * <div = "class"></div>
 * <div = "style"></div>
 */
$htmlDivLtBegin = array(
    'ltb' => array(
        'ltb' => '<'
    )
);

$htmlDivBegin = array(
    'divB' => array(
        'divB' => 'div '
    )
);

$htmlDivIdBegin = array(
    'dib' => array(
        'dib' => 'id'
    )
);

$htmlDivEqual = array(
    'equal' => array(
        'equal' => '='
    )
);

$htmlDivBody = array(
    'body' => array(
        'body' => '"body"'
    )
);
$htmlDivGtBegin = array(
    'gtb' => array(
        'gtb' => '>'
    )
);

$htmlDivLtEnd = array(
    'lte' => array(
        'lte' => '<'
    )
);

$htmlDivSlash = array(
    'slash' => array(
        'slash' => '/'
    )
);

$htmlDivEnd = array(
    'divE' => array(
        'divE' => 'div'
    )
);

$htmlDivGtEnd = array(
    'gte' => array(
        'gte' => '>'
    )
);


/*
 * Nyikge
 * 01
 * 0 is negative - color: green;
 * 1 is positive - color: yellow
 * AO
 * A problem - color: green;
 * O solution - color: yellow
 */
$nyikgeZero = array(
    'zero' => array(
        'zero' => '0'
    )
);

$nyikgeOne = array(
    'one' => array(
        'one' => '1'
    )
);

$nyikgeA = array(
    'a' => array(
        'a' => 'A'
    )
);

$nyikgeO = array(
    'o' => array(
        'o' => 'O'
    )
);

echo $htmlDivLtBegin['ltb']['ltb'].$htmlDivBegin['divB']['divB'].$htmlDivIdBegin['dib']['dib'].$htmlDivEqual['equal']['equal']
    .$htmlDivBody['body']['body'].$htmlDivGtBegin['gtb']['gtb'].
    $htmlPageBegin['begin']['begin'].$htmlPage.$htmlPageEnd['end']['end'].
    $htmlClassBegin['begin']['begin'].
    $nyikgeZero['zero']['zero']
    .$nyikgeOne['one']['one'].
    $nyikgeA['a']['a'].
    $nyikgeO['o']['o'].
    $htmlClassEnd['end']['end'].
    $htmlDivLtEnd['lte']['lte'].$htmlDivSlash['slash']['slash'].$htmlDivEnd['divE']['divE'].$htmlDivGtEnd['gte']['gte'];
/*
 * Footer
 */

$date = date(Y);
echo $htmlDivLtBegin['ltb']['ltb'].$htmlDivBegin['divB']['divB'].$htmlDivIdBegin['dib']['dib'].$htmlDivEqual['equal']['equal']
    .$htmlDivBody['body']['body'].$htmlDivGtBegin['gtb']['gtb'].
    $htmlPageBegin['begin']['begin'].$htmlPageEnd['end']['end'].
    $date.$footer.
    $htmlDivLtEnd['lte']['lte'].$htmlDivSlash['slash']['slash'].$htmlDivEnd['divE']['divE'].$htmlDivGtEnd['gte']['gte'];
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
