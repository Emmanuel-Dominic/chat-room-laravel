<?php

use Illuminate\Support\Facades\Broadcast;

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
Broadcast::channel('messages', function ($user) {
// Broadcast::channel('messages.rooms.{id}', function ($user, $id) {
    // return (int) $user->id === (int) $id;
    return true;
    // return (int) $user->rooms->contains($id);
});
