<table cellpadding="0" cellspacing="0" id="results-table">
	<tr>
		<th><?php echo $this->Paginator->sort('artist');?></th>
		<th><?php echo $this->Paginator->sort('title');?></th>
		<th><?php echo $this->Paginator->sort('album');?></th>
		<th><?php echo $this->Paginator->sort('release_date');?></th>
		<th><?php echo $this->Paginator->sort('added_by'); ?></th>
		<th>Status</th>
		<th>&nbsp;</th>
	</tr>
	<?php
	foreach ($tracks as $track): ?>
	<tr <?php if($track['Track']['playing'] == 1) : ?>class="playing"<?php endif; ?>>
		<td><?php echo h($track['Track']['artist']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['title']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['album']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['release_date']); ?>&nbsp;</td>
		<td><?php echo h($track['Track']['added_by']); ?></th>		
		<td>
			<?php if($track['Track']['playing'] == 1) : ?>
				Playing
			<?php elseif ($track['Track']['played'] == 0) : ?>
				Coming Up
			<?php else: ?>
				Played
			<?php endif; ?>
		</td>	
		<td><a href="votes/add/<?php echo $track['Track']['id']; ?>" class="vote">Vote Down</a></td>
	</tr>
	<?php endforeach; ?>
</table>

