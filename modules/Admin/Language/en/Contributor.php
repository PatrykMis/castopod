<?php

declare(strict_types=1);

/**
 * @copyright  2020 Ad Aures
 * @license    https://www.gnu.org/licenses/agpl-3.0.en.html AGPL3
 * @link       https://castopod.org/
 */

return [
    'podcast_contributors' => 'Podcast contributors',
    'view' => "{username}'s contribution to {podcastTitle}",
    'add' => 'Add contributor',
    'add_contributor' => 'Add a contributor for {0}',
    'edit_role' => 'Update role for {0}',
    'edit' => 'Edit',
    'remove' => 'Remove',
    'list' => [
        'username' => 'Username',
        'role' => 'Role',
    ],
    'form' => [
        'user' => 'User',
        'user_placeholder' => 'Select a user…',
        'role' => 'Role',
        'role_placeholder' => 'Select its role…',
        'submit_add' => 'Add contributor',
        'submit_edit' => 'Update role',
    ],
    'roles' => [
        'podcast_admin' => 'Podcast admin',
    ],
    'messages' => [
        'removeOwnerError' => "You can't remove the podcast owner!",
        'removeSuccess' =>
            'You have successfully removed {username} from {podcastTitle}',
        'alreadyAddedError' =>
            "The contributor you're trying to add has already been added!",
    ],
];
