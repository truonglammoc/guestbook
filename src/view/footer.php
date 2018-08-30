<div class="footer">
    <ul class="pagination">
    <?php
    if ($totalPages > 1) {
        echo '<li class="page-item"><a class="page-link" href="/?p=' . (($p-1 > 0) ? ($p-1) : 1) . '"><</a></li>';
        for ($i = 1; $i <= $totalPages; $i++) {
            if ($i == $p) {
                echo '<li class="page-item active"><a class="page-link" href="/?p=' . ($i) . '">' . ($i) . '</a></li>';
            } else {
                echo '<li class="page-item"><a class="page-link" href="/?p=' . ($i) . '">' . ($i) . '</a></li>';
            }
        }
        echo '<li class="page-item"><a class="page-link" href="/?p=' . (($p+1 < $totalPages) ? ($p+1) : $totalPages) . '">></a></li>';
    }
    ?>
    </ul>
</div>
