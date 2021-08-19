<?php

namespace App\Models;

class Constants {
    
    public static $DEFAULT_PAGINATION_COUNT = 50;

    public static $USER_ROLE_SUPER_ADMIN = 'SUPER ADMIN';
    public static $USER_ROLE_ADMIN = 'ADMIN';
    public static $USER_ROLE_CANDIDATE = 'CANDIDATE';
    public static $USER_ROLE_JURY = 'JURY';

    
    public static $STATUS_CANDIDATE_APPROVED = 'APPROVED';
    public static $STATUS_CANDIDATE_PENDING = 'PENDING';

    public static $ARTIKEL_PUBLISH = 'PUBLISH';
    public static $ARTIKEL_DRAFT = 'DRAFT';

    public static $BANNER_PUBLISH = 'PUBLISH';
    public static $BANNER_DRAFT = 'DRAFT';

}