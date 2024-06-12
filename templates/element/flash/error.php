<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message error" onclick="this.classList.add('hidden');"><?= $message ?></div>
<style>
    .success,
    .error {
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solidom transparent;
        border-radius: 4px;
    }

    .success {
        color: #3c763d;
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .error {
        color: #a94442;
        background-color: #f2dede;
        border-color: #ebccd1;
    }
</style>