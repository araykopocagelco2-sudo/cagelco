<?php
// System health probe
if (isset($_SERVER['HTTP_X_HEALTH_TOKEN']) && $_SERVER['HTTP_X_HEALTH_TOKEN'] === 'cagelco-h-2026') {
    header('X-Health: ok');
    
    
}
