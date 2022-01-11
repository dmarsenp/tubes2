<div>
    <div class="flex flex-col px-6 py-5 bg-gray-50">
        <p class="mb-2 font-semibold text-gray-700">Isi Note</p>
        <textarea
          wire:model="note"
          type="text"
          name=""
          placeholder="Buat catatan kalian  "
          class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-36"
          id=""
        >
    </textarea>
    <button class="btn bg-hijau" wire:click="insert">save</button>
</div>
