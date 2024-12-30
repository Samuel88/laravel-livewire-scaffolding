<form wire:submit="save">
    <label for="title">Title</label>
    <input type="text" id="title" wire:model="title">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10" wire:model="content"></textarea>
    <button type="submit">Save</button>

    <span wire:loading>Saving...</span>
</form>