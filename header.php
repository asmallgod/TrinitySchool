<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>

<body <?php body_class('poppins-semibold'); ?>>

	<header class="flex items-center justify-between pt-11 pl-24 pr-32 pb-3">

		<img class="w-[252px]" src="<?php the_field('header_logo', 'option') ?>" />


		<div class="flex items-center justify-start">
			<?php wp_nav_menu(array(
				'theme_location' => 'primary', // 指定要显示的菜单的位置
				'container' => 'nav', // 使用<nav>元素作为容器
				'container_class' => 'header_menu', // 定义容器元素的类名
				'menu_class' => 'flex items-center', // 定义菜单元素的类名
			)) ?>

			<div id="language-switcher" class="language-switcher group w-[30px] relative ml-10 cursor-pointer">
				<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g clip-path="url(#clip0_31_701)">
						<path class="group-hover:fill-primary stroke-primary" d="M25.1484 4.85156C22.4414 2.13867 18.832 0.644531 15 0.644531C11.168 0.644531 7.55859 2.13867 4.85156 4.85156C2.14453 7.56445 0.644531 11.168 0.644531 15C0.644531 18.832 2.13867 22.4414 4.85156 25.1484C7.56445 27.8555 11.168 29.3555 15 29.3555C18.832 29.3555 22.4414 27.8613 25.1484 25.1484C27.8555 22.4355 29.3555 18.832 29.3555 15C29.3555 11.168 27.8613 7.55859 25.1484 4.85156ZM28.0547 14.3555H22.4883C22.4355 12.1406 22.125 10.0078 21.5801 8.11523C22.6406 7.57031 23.6309 6.88477 24.5391 6.07617C26.5898 8.26758 27.8965 11.1621 28.0547 14.3555ZM15.6445 15.6445H21.2051C21.1582 17.6836 20.877 19.6348 20.3906 21.3809C18.8906 20.7773 17.291 20.4258 15.6445 20.3496V15.6445ZM23.6133 5.17969C22.8633 5.8418 22.043 6.4043 21.1758 6.87305C20.9531 6.25195 20.7012 5.66602 20.4199 5.11523C19.8633 4.01367 19.2305 3.11133 18.5332 2.41992C20.4375 2.95312 22.166 3.9082 23.6133 5.17969ZM15.6445 2.13281C16.9863 2.43164 18.252 3.66797 19.2715 5.68359C19.5469 6.22852 19.793 6.80859 20.0098 7.42383C18.6328 7.99219 17.1621 8.32617 15.6445 8.40234V2.13281ZM20.3965 8.66016C20.877 10.3945 21.1523 12.334 21.1992 14.3613H15.6445V9.69727C17.2969 9.62109 18.8965 9.26367 20.3965 8.66016ZM14.3555 14.3555H8.79492C8.8418 12.3281 9.11719 10.3887 9.59766 8.6543C11.0977 9.26367 12.7031 9.61523 14.3496 9.68555V14.3555H14.3555ZM14.3613 2.13281V8.40234C12.8438 8.32617 11.3672 7.99219 9.99609 7.42383C10.2129 6.80859 10.459 6.22852 10.7344 5.68359C11.7539 3.66797 13.0195 2.43164 14.3613 2.13281ZM11.4727 2.41992C10.7754 3.11133 10.1426 4.01953 9.58594 5.11523C9.31055 5.66602 9.05859 6.25195 8.83008 6.87305C7.96289 6.4043 7.14844 5.8418 6.39258 5.17969C7.83984 3.9082 9.56836 2.95312 11.4727 2.41992ZM5.4668 6.07617C6.375 6.88477 7.36523 7.56445 8.42578 8.11523C7.88086 10.0137 7.56445 12.1406 7.51758 14.3555H1.95117C2.10938 11.1621 3.41602 8.26758 5.4668 6.07617ZM1.95117 15.6445H7.51758C7.57031 17.877 7.88672 20.0156 8.4375 21.9199C7.38281 22.4648 6.39258 23.1387 5.49023 23.9473C3.42187 21.75 2.10938 18.8496 1.95117 15.6445ZM6.41602 24.8438C7.16602 24.1875 7.98047 23.625 8.8418 23.1621C9.06445 23.7656 9.31055 24.3457 9.58594 24.8848C10.1426 25.9863 10.7754 26.8887 11.4727 27.5859C9.58008 27.0527 7.85742 26.1035 6.41602 24.8438ZM14.3613 27.8672C13.0195 27.5684 11.7539 26.332 10.7344 24.3164C10.4648 23.7832 10.2246 23.2148 10.0078 22.6113C11.3789 22.043 12.8496 21.709 14.3613 21.6387V27.8672ZM9.61523 21.3809C9.12891 19.6348 8.84766 17.6836 8.80078 15.6445H14.3613V20.3496C12.7148 20.4199 11.1152 20.7715 9.61523 21.3809ZM15.6504 27.8672V21.6387C17.1621 21.7148 18.6328 22.043 20.0039 22.6113C19.7871 23.2148 19.5469 23.7832 19.2773 24.3164C18.2578 26.332 16.9922 27.5684 15.6504 27.8672ZM18.5391 27.5801C19.2363 26.8887 19.8691 25.9805 20.4258 24.8789C20.7012 24.3398 20.9473 23.7598 21.1699 23.1562C22.0312 23.6191 22.8457 24.1816 23.5957 24.8379C22.1543 26.1035 20.4316 27.0527 18.5391 27.5801ZM24.5273 23.9473C23.625 23.1445 22.6348 22.4648 21.5801 21.9199C22.1309 20.0156 22.4473 17.8711 22.5 15.6445H28.0664C27.9023 18.8496 26.5898 21.75 24.5273 23.9473Z" fill="#231F20" stroke="black" stroke-width="0.2" />
					</g>
					<defs>
						<clipPath id="clip0_31_701">
							<rect width="30" height="30" fill="white" />
						</clipPath>
					</defs>
				</svg>

				<div id="language-list" class="hidden">
					<?php $array = trp_custom_language_switcher();  ?>
					<!-- IMPORTANT! You need to have data-no-translation on the wrapper with the links or TranslatePress will automatically translate them in a secondary language. -->
					<ul data-no-translation class="absolute left-1/2 -bottom-4 translate-y-full -translate-x-1/2 rounded-xl flex flex-col shadow-md">
						<!--  // Check whether TranslatePress can run on the current path or not. If the path is excluded from translation, trp_allow_tp_to_run will be false -->
						<?php if (apply_filters('trp_allow_tp_to_run', true)) { ?>
							<?php foreach ($array as $name => $item) { ?>
								<li class="w-40 h-11 flex items-center justify-center hover:bg-gray-50 transition-all">
									<a class="py-1 flex items-center justify-center" href="<?php echo $item['current_page_url'] ?>">
										<img class="mr-2" src="<?php echo $item['flag_link'] ?>" />
										<span><?php echo $item['language_name'] ?>
										</span>
									</a>
								</li>
							<?php } ?>
						<?php } ?>
					</ul>
				</div>
			</div>
			<a class="w-40 h-10 ml-10 rounded-xl bg-primary flex items-center justify-center text-white hover:brightness-110 transition-all" href="<?php the_field('student_portal_link', 'option') ?>"><?php the_field('student_portal_label', 'option') ?></a>
		</div>

	</header>

	<main>