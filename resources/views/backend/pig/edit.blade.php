@extends('backend.app')
@section('content')
<div class="">
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/pig" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/pig/{{ $pig->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="breed_id">Pig's Breed (Optional)</label>
                            <select id="breed_id" class="form-control" name="breed_id">
                                @foreach ($breeds as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $pig->breed_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="name">Pig Name *</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $pig->name }}">
                        </div>

                        <div class="row my-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tag_no">Tag No *</label>
                                    <input id="tag_no" class="form-control" type="text" name="tag_no" value="{{ $pig->tag_no }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="litter_no">Litter No *</label>
                                    <input id="litter_no" class="form-control" type="text" name="litter_no" value="{{ $pig->litter_no }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="weight">Weight *</label>
                                    <input id="weight" class="form-control" type="text" name="weight" value="{{ $pig->weight }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control" name="gender">
                                        <option value="male" {{ "male" == $pig->gender ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ "female" == $pig->gender ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob">Date of Birth (Optional)</label>
                                    <input id="dob" class="form-control" type="date" name="dob" value="{{ $pig->dob }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date_of_entry_on_farm">Date of Entry on Farm</label>
                                    <input id="date_of_entry_on_farm" class="form-control" type="date" name="date_of_entry_on_farm" value="{{ $pig->date_of_entry_on_farm }}">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-md-4">
                               <div class="form-group">
                                   <label for="pig_group_id">Pig's Group (Optional)</label>
                                   <select id="pig_group_id" class="form-control" name="pig_group_id">
                                       @foreach ($groups as $item)
                                           <option value="{{ $item->id }}" {{ $item->id == $pig->pig_group_id ? 'selected' : '' }}>{{ $item->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pig_obtain_by">Select how the pig wa obtained *</label>
                                    <select id="pig_obtain_by" class="form-control" name="pig_obtain_by">
                                        <option value="Born on farm" {{ "Born on farm" == $pig->pig_obtain_by ? 'selected' : '' }}>Born on farm</option>
                                        <option value="Purchased" {{ "Purchased" == $pig->pig_obtain_by ? 'selected' : '' }}>Purchased</option>
                                        <option value="Other" {{ "Other" == $pig->pig_obtain_by ? 'selected' : '' }}>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="if_other">If other Specify the source of pig (Optional)</label>
                                    <input id="if_other" class="form-control" type="text" name="if_other" value="{{ $pig->if_other }}">
                                </div>
                            </div>

                        </div>

                       <div class="row my-2">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="mother_tag_no">Mother Tag No (Optional)</label>
                                   <input id="mother_tag_no" class="form-control" type="text" name="mother_tag_no" value="{{ $pig->mother_tag_no }}">
                               </div>
                           </div>

                           <div class="col-md-4">
                            <div class="form-group">
                                <label for="father_tag_no">Father Tag No (Optional)</label>
                                <input id="father_tag_no" class="form-control" type="text" name="father_tag_no" value="{{ $pig->father_tag_no }}">
                            </div>
                        </div>
                       </div>

                       <div class="form-group">
                           <label for="notes">Write som notes (Optional)</label>
                           <textarea id="notes" class="form-control" name="notes" rows="3">{{ $pig->notes }}</textarea>
                       </div>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Update Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
