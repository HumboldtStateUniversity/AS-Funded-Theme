<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<h2 class="announcements">Announcements</h2>
<ul>
<?php foreach ($rows as $id => $row): ?>
    <li><?php print $row; ?></li>
<?php endforeach; ?>
</ul>