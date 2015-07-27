<div class="content">
	<div class="content-heading">
		<div class="container">
			<h1 class="heading">관리페이지</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-10">
				<section class="content-inner">
					<!--<h2 class="content-sub-heading">사용자</h2>-->
					<div class="card-wrap">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<p class="card-heading">사용자</p>
									<div class="card-table">
										<div class="table-responsive">
											<table class="table table-hover table-stripe" title="Table with Hover and Stripe Rows">
												<thead>
													<tr>
														<th>id</th>
														<th>이메일</th>
														<th>로그인</th>
														<th>관리자</th>
													</tr>
												</thead>
												<tbody>
												<?php
													foreach($users as $user) {
												?>
													<tr>
														<td><?php echo $user->_id ?></td>
														<td><?php echo $user->email ?></td>
														<td><?php echo $user->logined ?></td>
														<td>
															<?php
																if($user->isadmin) {
															?>
																관리자
															<?php
																} else {
															?>
																x
															<?php
																} 
														    ?>
													    </td>
													</tr>
												<?php
													}
												?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card-action">
									<ul class="nav nav-list pull-right">
										<li>
											<a <?php if ($page == 1) echo "class='ng-disabled-btn'"; ?>
											 href="/NEWGENERATION/Management/index?page=<?php echo $page-1 ?>&perPage=<?php echo $perPage?>">
											 	<span class="icon">chevron_left</span>
										 	</a>
										</li>
										<li>
											<a <?php if ($page == $last_page) echo "class='ng-disabled-btn'"; ?> 
											href="/NEWGENERATION/Management/index?page=<?php echo $page+1 ?>&perPage=<?php echo $perPage?>"><span class="icon">chevron_right</span></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>