<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="<?php echo $pageKeyboards; ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link inline rel="stylesheet" href="../dist/bootstrap/css/bootstrap.css">

    <link inline rel="stylesheet" href="../style.css">
    <link inline rel="stylesheet" href="../documentation-main/documentation.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="https://www.ag-grid.com/favicon.ico" />

<!-- Hotjar Tracking Code for https://www.ag-grid.com/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:372643,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>


</head>

<?php
$version = 'latest';

$rootFolder;
if (strcmp($version , 'latest') == 0) {
    $rootFolder = '/';
} else {
    $rootFolder = '/archive/'.$version.'/';
}
?>

<body ng-app="documentation">

<?php if ($version=='latest') {
    $navKey = "documentation";
    include '../includes/navbar.php';
} else { ?>
    <nav class="navbar-inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-12 top-header big-text">
                        <span class="top-button-wrapper">
                            <a class="top-button" href="<?php print($rootFolder) ?>"> <i class="fa fa-users"></i> ag-Grid Archive Documentation <?php print($version) ?></a>
                        </span>
                </div>
            </div>

        </div>
    </nav>
<?php } ?>

<?php $headerTitle = "Documentation"; include '../includes/headerRow.php'; ?>


    <div class="container" style="margin-top: 20px">

        <div class="row">

            <div class="col-sm-2">


                <h4>
                    The Basics
                </h4>

                <?php if ($key == "Getting Started") { ?>
                    <span class="sidebarLinkSelected">Getting Started</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-getting-started/">Getting Started</a>
                <?php } ?>

                <?php if ($key == "Getting Started Javascript") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/javascript_small.png" width="20px"> Javascript</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-javascript-data-grid/"><img inline src="/images/javascript_small.png" width="20px"> Javascript</a>
                <?php } ?>

                <?php if ($key == "Getting Started React") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/react_small.png" width="20px"> React</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-react-data-grid/"><img inline src="/images/react_small.png" width="20px"> React</a>
                <?php } ?>

                <?php if ($key == "Getting Started ng1") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/angularjs_small.png" width="20px"> Angular 1.x</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-angularjs-data-grid/"><img inline src="/images/angularjs_small.png" width="20px"> Angular 1.x</a>
                <?php } ?>

                <?php if ($key == "Getting Started ng2") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/angular2_small.png" width="20px"> Angular 2+</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-angular-2-data-grid/"><img inline src="/images/angular2_small.png"width="20px"> Angular 2+</a>
                <?php } ?>


                <?php if ($key == "Angular SystemJS") { ?>
                    <span class="sidebarLinkSelected" style="padding-left: 40px">SystemJS</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>ag-grid-angular-systemjs/" style="padding-left: 40px">SystemJS</a>
                <?php } ?>

                <?php if ($key == "Angular Webpack") { ?>
                    <span class="sidebarLinkSelected" style="padding-left: 40px">Webpack</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>ag-grid-angular-webpack/" style="padding-left: 40px">Webpack</a>
                <?php } ?>

                <?php if ($key == "Angular CLI") { ?>
                    <span class="sidebarLinkSelected" style="padding-left: 40px">Angular CLI</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>ag-grid-angular-angularcli/" style="padding-left: 40px">Angular CLI</a>
                <?php } ?>

                <?php if ($key == "Getting Started Web Components") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/webComponents_small.png" width="20px"> Web Components</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-web-component-data-grid/"><img inline src="/images/webComponents_small.png" width="20px"> Web Components</a>
                <?php } ?>

                <?php if ($key == "Getting Started Aurelia") { ?>
                    <span class="sidebarLinkSelected childItem"><img inline src="/images/aurelia_small.png" width="20px"> Aurelia</span>
                <?php } else { ?>
                    <a class="sidebarLink childItem" href="<?php print($rootFolder) ?>best-aurelia-data-grid/"><img inline src="/images/aurelia_small.png" width="20px"> Aurelia</a>
                <?php } ?>

                <?php if ($key == "Width & Height") { ?>
                    <span class="sidebarLinkSelected">Width & Height</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-width-and-height/">Width & Height</a>
                <?php } ?>

                <h4>
                    Interfacing
                </h4>

                <?php if ($key == "Interfacing Overview") { ?>
                    <span class="sidebarLinkSelected">Overview</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-interfacing-overview/">Overview</a>
                <?php } ?>

                <?php if ($key == "Properties") { ?>
                    <span class="sidebarLinkSelected">Properties</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-properties/">Properties</a>
                <?php } ?>

                <?php if ($key == "Column Definitions") { ?>
                    <span class="sidebarLinkSelected">Columns</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-definitions/">Columns</a>
                <?php } ?>

                <?php if ($key == "Events") { ?>
                    <span class="sidebarLinkSelected">Events</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-events/">Events</a>
                <?php } ?>

                <?php if ($key == "Callbacks") { ?>
                    <span class="sidebarLinkSelected">Callbacks</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-callbacks/">Callbacks</a>
                <?php } ?>

                <?php if ($key == "Grid API") { ?>
                    <span class="sidebarLinkSelected">Grid API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-api/">Grid API</a>
                <?php } ?>

                <?php if ($key == "Column API") { ?>
                    <span class="sidebarLinkSelected">Column API</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-api/">Column API</a>
                <?php } ?>

                <h4>
                    Free Features
                </h4>

                <?php if ($key == "Sorting") { ?>
                    <span class="sidebarLinkSelected">Sorting</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-sorting/">Sorting</a>
                <?php } ?>

                <?php if ($key == "Filtering") { ?>
                    <span class="sidebarLinkSelected">Filtering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-filtering/">Filtering</a>
                <?php } ?>

                <?php if ($key == "Selection") { ?>
                    <span class="sidebarLinkSelected">Selection</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-selection/">Selection</a>
                <?php } ?>

                <?php if ($key == "Resizing") { ?>
                    <span class="sidebarLinkSelected">Resizing</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-resizing/">Resizing</a>
                <?php } ?>

                <?php if ($key == "Pinning") { ?>
                    <span class="sidebarLinkSelected">Pinning</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pinning/">Pinning</a>
                <?php } ?>

                <?php if ($key == "Grouping Columns") { ?>
                    <span class="sidebarLinkSelected">Grouping Columns</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-grouping-headers/">Grouping Columns</a>
                <?php } ?>

                <?php if ($key == "Tree Data") { ?>
                    <span class="sidebarLinkSelected">Tree Data</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-tree/">Tree Data</a>
                <?php } ?>

                <?php if ($key == "Row Height") { ?>
                    <span class="sidebarLinkSelected">Row Height</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-row-height/">Row Height</a>
                <?php } ?>

                <?php if ($key == "Floating") { ?>
                    <span class="sidebarLinkSelected">Floating Rows</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-floating/">Floating Rows</a>
                <?php } ?>

                <?php if ($key == "Value Getters") { ?>
                    <span class="sidebarLinkSelected">Value Getters</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-value-getters/">Value Getters</a>
                <?php } ?>

                <?php if ($key == "Cell Expressions") { ?>
                    <span class="sidebarLinkSelected">Cell Expressions</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-expressions/">Cell Expressions</a>
                <?php } ?>

                <?php if ($key == "Cell Styling") { ?>
                    <span class="sidebarLinkSelected">Cell Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-styling/">Cell Styling</a>
                <?php } ?>

                <?php if ($key == "Cell Rendering") { ?>
                    <span class="sidebarLinkSelected">Cell Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-rendering/">Cell Rendering</a>
                <?php } ?>

                <?php if ($key == "Cell Editing") { ?>
                    <span class="sidebarLinkSelected">Cell Editing</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-cell-editing/">Cell Editing</a>
                <?php } ?>

                <?php if ($key == "Context") { ?>
                    <span class="sidebarLinkSelected">Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-context/">Context</a>
                <?php } ?>

                <?php if ($key == "InsertRemove") { ?>
                    <span class="sidebarLinkSelected">Insert & Remove</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-insert-remove/">Insert & Remove</a>
                <?php } ?>

                <?php if ($key == "Refresh") { ?>
                    <span class="sidebarLinkSelected">Refresh</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-refresh/">Refresh</a>
                <?php } ?>

                <?php if ($key == "Animation") { ?>
                    <span class="sidebarLinkSelected">Animation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-animation/">Animation</a>
                <?php } ?>

                <?php if ($key == "Header Rendering") { ?>
                    <span class="sidebarLinkSelected">Header Templates<br/>&nbsp;& Rendering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-header-rendering/">Header Templates<br/>&nbsp;& Rendering</a>
                <?php } ?>

                <?php if ($key == "Keyboard Navigation") { ?>
                    <span class="sidebarLinkSelected">Keyboard Navigation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-keyboard-navigation/">Keyboard Navigation</a>
                <?php } ?>

                <?php if ($key == "Internationalisation") { ?>
                    <span class="sidebarLinkSelected">Internationalisation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-internationalisation/">Internationalisation</a>
                <?php } ?>

                <?php if ($key == "Full Width") { ?>
                    <span class="sidebarLinkSelected">Full Width Rows<br/>&nbsp;& Master Detail</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-master-detail/">Full Width Rows<br/>&nbsp;& Master Detail</a>
                <?php } ?>

                <?php if ($key == "Master / Slave") { ?>
                    <span class="sidebarLinkSelected">Master / Slave</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-master-slave/">Master / Slave</a>
                <?php } ?>

                <?php if ($key == "Touch") { ?>
                    <span class="sidebarLinkSelected">Touch</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-touch/">Touch</a>
                <?php } ?>

                <?php if ($key == "Row Model") { ?>
                    <span class="sidebarLinkSelected">Row Model</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-model/">Row Model</a>
                <?php } ?>

                <?php if ($key == "Data Export") { ?>
                    <span class="sidebarLinkSelected">CSV Export</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-export/">CSV Export</a>
                <?php } ?>

                <?php if ($key == "Styling") { ?>
                    <span class="sidebarLinkSelected">Layout & Styling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-styling/">Layout & Styling</a>
                <?php } ?>

                <?php if ($key == "Fresh Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Fresh Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/fresh-theme.php">&nbsp;  Fresh Theme</a>
                <?php } ?>
                <?php if ($key == "Blue Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Blue Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/blue-theme.php">&nbsp;  Blue Theme</a>
                <?php } ?>
                <?php if ($key == "Dark Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Dark Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/dark-theme.php">&nbsp;  Dark Theme</a>
                <?php } ?>
                <?php if ($key == "Material Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Material Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/material-theme.php">&nbsp;  Material Theme</a>
                <?php } ?>
                <?php if ($key == "Bootstrap Theme") { ?>
                    <span class="sidebarLinkSelected">&nbsp;  Bootstrap Theme</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-themes/bootstrap-theme.php">&nbsp;  Bootstrap Theme</a>
                <?php } ?>

                <?php if ($key == "RTL") { ?>
                    <span class="sidebarLinkSelected">RTL</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-rtl/">RTL</a>
                <?php } ?>

                <?php if ($key == "Icons") { ?>
                    <span class="sidebarLinkSelected">Icons</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-icons/">Icons</a>
                <?php } ?>

                <?php if ($key == "Overlays") { ?>
                    <span class="sidebarLinkSelected">Overlays</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-overlays/">Overlays</a>
                <?php } ?>

                <?php if ($key == "For Print") { ?>
                    <span class="sidebarLinkSelected">For Print</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-for-print/">For Print</a>
                <?php } ?>

                <h4>
                    Row Models
                </h4>

                <?php if ($key == "Row Models") { ?>
                    <span class="sidebarLinkSelected">Introduction</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-row-models/">Introduction</a>
                <?php } ?>

                <?php if ($key == "Datasource") { ?>
                    <span class="sidebarLinkSelected">Datasource</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-datasource/">Datasource</a>
                <?php } ?>

                <?php if ($key == "Pagination") { ?>
                    <span class="sidebarLinkSelected">Pagination</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pagination/">Pagination</a>
                <?php } ?>

                <?php if ($key == "Virtual Paging / Infinite Scrolling") { ?>
                    <span class="sidebarLinkSelected">Virtual Paging<br/>&nbsp;& Infinite Scrolling</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-virtual-paging/">Virtual Paging<br/>&nbsp;& Infinite Scrolling</a>
                <?php } ?>

                <h4>
                    Enterprise Features
                </h4>

                <?php if ($key == "Excel Export") { ?>
                    <span class="sidebarLinkSelected">Excel Export</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-excel/">Excel Export</a>
                <?php } ?>

                <?php if ($key == "Viewport") { ?>
                    <span class="sidebarLinkSelected">Viewport</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-viewport/">Viewport</a>
                <?php } ?>

                <?php if ($key == "Data Functions") { ?>
                    <span class="sidebarLinkSelected">Data Functions</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-data-functions/">Data Functions</a>
                <?php } ?>

                <?php if ($key == "Grouping") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Grouping Rows</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-grouping/">&nbsp; Grouping Rows</a>
                <?php } ?>

                <?php if ($key == "Aggregation") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Aggregation</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-aggregation/">&nbsp; Aggregation</a>
                <?php } ?>

                <?php if ($key == "Pivoting") { ?>
                    <span class="sidebarLinkSelected">&nbsp; Pivoting</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-pivoting/">&nbsp; Pivoting</a>
                <?php } ?>

                <?php if ($key == "Tool Panel") { ?>
                    <span class="sidebarLinkSelected">Tool Panel</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-tool-panel/">Tool Panel</a>
                <?php } ?>

                <?php if ($key == "Clipboard") { ?>
                    <span class="sidebarLinkSelected">Clipboard</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-clipboard/">Clipboard</a>
                <?php } ?>

                <?php if ($key == "Column Menu") { ?>
                    <span class="sidebarLinkSelected">Column Menu</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-column-menu/">Column Menu</a>
                <?php } ?>

                <?php if ($key == "Context Menu") { ?>
                    <span class="sidebarLinkSelected">Context Menu</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-context-menu/">Context Menu</a>
                <?php } ?>

                <?php if ($key == "Range Selection") { ?>
                    <span class="sidebarLinkSelected">Range Selection</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-range-selection/">Range Selection</a>
                <?php } ?>

                <?php if ($key == "Status Bar") { ?>
                    <span class="sidebarLinkSelected">Status Bar</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-status-bar/">Status Bar</a>
                <?php } ?>

                <?php if ($key == "Set Filtering") { ?>
                    <span class="sidebarLinkSelected">Set Filtering</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-set-filtering/">Set Filtering</a>
                <?php } ?>

                <?php if ($key == "License Key") { ?>
                    <span class="sidebarLinkSelected">Set License Key</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-set-license/">Set License Key</a>
                <?php } ?>

                <h4>
                    Examples
                </h4>

                <?php if ($key == "Styled Report") { ?>
                    <span class="sidebarLinkSelected">Styled Report</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-account-report/">Styled Report</a>
                <?php } ?>

                <?php if ($key == "File Browser") { ?>
                    <span class="sidebarLinkSelected">File Browser</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-file-browser/">File Browser</a>
                <?php } ?>

                <?php if ($key == "Expressions and Context") { ?>
                    <span class="sidebarLinkSelected">Expressions and Context</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>example-expressions-and-context/">Expressions and Context</a>
                <?php } ?>

                <h4>
                    Tutorials
                </h4>

                <?php if ($key == "Intermediate Tutorial") { ?>
                    <span class="sidebarLinkSelected">Intermediate</span>
                <?php } else { ?>
                    <a class="sidebarLink" href="<?php print($rootFolder) ?>ag-grid-tutorials/">Intermediate</a>
                <?php } ?>

                <?php if ($version=='latest') { ?>
                    <h4>
                        Misc
                    </h4>

                    <?php if ($key == "Change Log") { ?>
                        <span class="sidebarLinkSelected">Change Log</span>
                    <?php } else { ?>
                        <a class="sidebarLink" href="<?php print($rootFolder) ?>change-log/changeLogIndex.php">Change Log</a>
                    <?php } ?>
                    <?php if ($key == "Roadmap") { ?>
                        <span class="sidebarLinkSelected">Feature Roadmap</span>
                    <?php } else { ?>
                        <a class="sidebarLink" href="<?php print($rootFolder) ?>javascript-grid-roadmap/">Feature Roadmap</a>
                    <?php } ?>
                    <a class="sidebarLink" href="/archive/">Archive Docs</a>
                <?php } ?>

            </div>

            <div class="col-sm-10 blog-main">