<?php

session_start();

// prima di entrare in unna sessione lenta devo fare commit
session_commit();

sleep(10);

echo 'ho finito';