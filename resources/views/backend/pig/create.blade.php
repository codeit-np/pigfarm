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
                        <form action="/pig" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="breed_id">Pig's Breed (Optional)</label>
                            <select id="breed_id" class="form-control" name="breed_id">
                                @foreach ($breeds as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group my-2">
                            <label for="name">Pig Name *</label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>

                        <div class="row my-2">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tag_no">Tag No *</label>
                                    <input id="tag_no" class="form-control" type="text" name="tag_no">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="litter_no">Litter No *</label>
                                    <input id="litter_no" class="form-control" type="text" name="litter_no">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="weight">Weight *</label>
                                    <input id="weight" class="form-control" type="text" name="weight">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender">Gender</label>
                                    <select id="gender" class="form-control" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dob">Date of Birth (Optional)</label>
                                    <input id="dob" class="form-control" type="date" name="dob">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date_of_entry_on_farm">Date of Entry on Farm</label>
                                    <input id="date_of_entry_on_farm" class="form-control" type="date" name="date_of_entry_on_farm">
                                </div>
                            </div>
                        </div>

                        <div class="row my-2">
                            <div class="col-md-4">
                               <div class="form-group">
                                   <label for="pig_group_id">Pig's Group (Optional)</label>
                                   <select id="pig_group_id" class="form-control" name="pig_group_id">
                                       @foreach ($groups as $item)
                                           <option value="{{ $item->od }}">{{ $item->name }}</option>
                                       @endforeach
                                   </select>
                               </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pig_obtain_by">Select how the pig wa obtained *</label>
                                    <select id="pig_obtain_by" class="form-control" name="pig_obtain_by">
                                        <option value="Born on farm">Born on farm</option>
                                        <option value="Purchased">Purchased</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="if_other">If other Specify the source of pig (Optinal)</label>
                                    <input id="if_other" class="form-control" type="text" name="if_other">
                                </div>
                            </div>

                        </div>

                       <div class="row my-2">
                           <div class="col-md-4">
                               <div class="form-group">
                                   <label for="mother_tag_no">Mother Tag No (Optional)</label>
                                   <input id="mother_tag_no" class="form-control" type="text" name="mother_tag_no">
                               </div>
                           </div>

                           <div class="col-md-4">
                            <div class="form-group">
                                <label for="father_tag_no">Father Tag No (Optional)</label>
                                <input id="father_tag_no" class="form-control" type="text" name="father_tag_no">
                            </div>
                        </div>
                       </div>

                       <div class="form-group">
                           <label for="notes">Write som notes (Optional)</label>
                           <textarea id="notes" class="form-control" name="notes" rows="3"></textarea>
                       </div>
                        <button type="submit" class="btn btn-primary btn-sm my-2">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
