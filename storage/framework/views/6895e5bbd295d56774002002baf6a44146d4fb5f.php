

<?php $__env->startSection('content'); ?>

    <div class="container mx-auto mt-10 mb-10">
        <div class="bg-white p-5 rounded shadow-sm">
            <div class="grid grid-cols-8 gap-4 mb-4">
                <div class="col-span-1 mt-2">
                    <a href="<?php echo e(route('post.create')); ?>"
                        class="w-full bg-indigo-500 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700">TAMBAH POST</a>
                </div>
                <div class="col-span-7">
                    <form action="<?php echo e(route('post.index')); ?>" method="GET">
                        <input type="text" name="search"
                            class="w-full bg-gray-200 p-2 rounded shadow-sm border-gray-200 focus:outline-none focus:bg-white"
                            placeholder="ketik NIM Mahasiswa dan enter">
                    </form>
                </div>
            </div>
            <table class="min-w-full table-auto">
                <thead class="justify-between">
                    <tr class="bg-indigo-500 w-full">
                        <th class="px-16 py-2">
                            <span class="text-white">NIM</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="tetx-white">Nama Mahasiswa</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="tetx-white">No HP</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="text-white">Alamat</span>
                        </th>
                        <th class="px-16 py-2 text-left">
                            <span class="text-white">Foto</span>
                        </th>
                        <th class="px-16 py-2">
                            <span class="text-white">Aksi</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-gray-200">
                <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="bg-white border-2 border-gray-200">
                    
                        <td class="px-16 py-2">
                            <?php echo e($post->nim); ?>

                        </td>

                        <td class="px-16 py-2">
                            <?php echo $post->nama_mhs; ?>

                        </td>

                        <td class="px-16 py-2">
                            <?php echo $post->nhp; ?>

                        </td>

                        <td class="px-16 py-2">
                            <?php echo $post->alamat; ?>

                        </td>

                        <td class="px-16 py-2">
                            <img src="<?php echo e(Storage::url('public/posts/' . $post->image)); ?>" class="w-48 rounded-md">
                        </td>
                        <td class="px-10 py-2 text-center">
                            <form onsubmit="return confirm('Apkaha Anda Yakin?');"
                                action="<?php echo e(route('post.destroy', $post->id)); ?>" method="POST">
                                <button
                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:border-indigo-700 text-xs focus:outline-none mr-2">
                                    <a href="<?php echo e(route('post.edit', $post->id)); ?>">EDIT</a></button>

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit"
                                        class="bg-red-500 text-white px-4 py-2 rounded hover:border-red-700 tetx-xs focus:outline-none">HAPUS</button>
                            </form>
                        </td>    
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="bg-red-500 text-white p-3 rounded shadow-sm mb-3">
                            Data Belum Tersedia!
                        </div>
                        <?php endif; ?>
                </tbody>
            </table>
            <div class="mt-2">
                <?php echo e($posts->links('vendor.pagination.tailwind')); ?>

            </div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => 'Data Posts'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dzikril\yayangCRUD\resources\views/post/index.blade.php ENDPATH**/ ?>