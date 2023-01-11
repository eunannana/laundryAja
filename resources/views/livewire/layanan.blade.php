<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-3">
            <!-- @include('layouts/sidebar') -->
        </div>
        <div class="col-md-8 col-lg-9">
            <h2>Service Page</h2>

            @include('layouts/layanan/tambah')
            @include('layouts/layanan/edit')
            @include('layouts/layanan/hapus')
            @include('layouts/flashdata')

            <div class="row">
                <div class="col-md-8">
                    <button wire:click="show_tambah" type="button" class="btn btn-primary btn-sm mb-3">
                        Add Service
                    </button>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input wire:model="search" type="text" class="form-control" placeholder="Search">
                        <div class="input-group-prepend" style="cursor: pointer">
                            <div wire:click="format_search" class="input-group-text">x</div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="10%" scope="col">No</th>
                        <th scope="col">Service</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Price</th>
                        <th width="10%" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($layanan as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->durasi }} hours</td>
                            <td>Rp. {{ number_format($item->harga) }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button wire:click="show_edit({{ $item->id }})" type="button"
                                        class="btn btn-sm btn-primary mr-2">Edit</button>
                                    <button wire:click="show_hapus({{ $item->id }})" type="button"
                                        class="btn btn-sm btn-danger">Delete</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $layanan->links() }}
        </div>
    </div>
</div>
