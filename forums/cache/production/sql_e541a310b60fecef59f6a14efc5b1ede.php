<?php exit; ?>
1633318785
SELECT m.*, u.user_colour, g.group_colour, g.group_type FROM (pa_moderator_cache m) LEFT JOIN pa_users u ON (m.user_id = u.user_id) LEFT JOIN pa_groups g ON (m.group_id = g.group_id) WHERE m.display_on_index = 1
6
a:0:{}