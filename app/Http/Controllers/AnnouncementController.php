<?php
namespace App\Http\Controllers;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Facades\View;
use App\Models\Announcement;
use App\Models\CrawledAnnounce;
use App\Models\Page;

class AnnouncementController extends BaseController
{

	public function adminAnnouncement()
	{
		$page = Page::where('type', '=', 'announcements')->where('published', '=', 1)->get();
		return View::make('adminannouncement', array(
			'page' => $page
		));
	}
	public function frontAnnouncement()
	{
		$page = Page::where('type', '=', 'announcements')->where('published', '=', 1)->get();
		// $annualreport = Annualreport::where('active','=',1)->get();

		$pageTitle = $page[0]->left_block1_title;
		$masthead = url() . '/images/banner_subpage/banner7.jpg';
		$breadcrumbs = array(
			0 => array(
				"title" => "Home",
				"url" => ""
			),
			1 => array(
				"title" => "Investor Relations",
				"url" => ""
			),
			2 => array(
				"title" => "Annual Reports",
				"url" => ""
			)
		);

		$mainMenuTitle = $page[0]->page_title;
		return View::make('frontannouncement', array(
			'page' => $page[0],
			'mainMenuTitle' => $mainMenuTitle,
			'pageTitle' => $pageTitle,
			'breadcrumbs' => $breadcrumbs,
			'masthead' => $masthead
		));

		return View::make('frontannouncement', array(
			'page' => $page[0],
			'mainMenuTitle' => $mainMenuTitle,
			'pageTitle' => $pageTitle,
			'breadcrumbs' => $breadcrumbs,
			'masthead' => $masthead
		));
	}


	/**
	 *
	 *   Cron function to Crawl Annoucements
	 *
	 *   */
	function crawlAnnouncement()
	{

		try {
			// $this->updateCrawled();
		} catch (\Exception $e) {
			// error in updating crawled data
		}


		//$announcelists = Announcement::where ( 'status', '=', 1 )->where ( 'category', '=', "Change in Audit Committee" )->get();
		/*$announcelists = Announcement::where ( 'status', '=', 1 )->where ( 'id', '=', 210 )->get();*/
		$announcelists = Announcement::where('status', '=', 1)->where('crawled', 0)->get();





		//$announcelists = Announcement::where('crawled', '=', 0 )->get();

		foreach ($announcelists as $announce) {
			try {
				$html = '';
				$announce['html'] = preg_replace(array('`(<b)([^\w])`i', '`(<i)([^\w])`i'), array("<strong$2", "<em$2"), str_replace(array('</b>', '</i>'), array('</strong>', '</em>'), $announce['html']));

				// echo preg_replace ( "/\r|\n/", "", $announce['category']);
				// echo "<br/>";
				$cat = trim(preg_replace("/\r|\n/", "", $announce['category']));
				switch ($cat) {
					case 'Entitlement(Notice of Book Closure)':
					case 'Entitlements (Notice of Book Closure)':
						$html = $this->categoryEntitlements($announce['html']);
						break;
					case 'Change in Nomination Committee':
						$html = $this->categoryChnageNominationCommittee($announce);
						break;
					case 'Investor Alert Announcement':
						$html = $this->categoryInvestorAlert($announce['html']);
						break;
					case 'Additional Listing Announcement (ALA)':
					case 'Additional Listing Announcement /Subdivision of Shares':
						$html = $this->categoryAla($announce['html']);
						break;
					case 'Listing Circular':
						$html = $this->categoryListingCircular($announce['html']);
						break;

						//5 Trading of rights announcement

					case 'Financial Results':
					case 'Financial Result Announcement':
						$html = $this->categoryFinancialResults($announce);
						break;
					case 'General Announcement for PLC':
						$announce['category'] = 'General Announcement';
					case 'General Announcement':
						$html = $this->categoryGeneralAnnouncement($announce);
						break;
					case 'General Meeting':
						$announce['category'] = 'General Meetings';
					case 'General Meetings':
						$html = $this->categoryGeneralMeetings($announce);
						break;

					case 'Special Announcements':
						$html = $this->categorySpecialAnnouncements($announce);
						break;

					case "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965":
					case "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016":
					case "Changes in Director's Interest Pursuant to Section 135":
						$html = $this->categoryChangesDirectorsInterest($announce);
						break;
					case "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965":
						$html = $this->categoryChangesSubstantialShareHolder($announce);
						break;
					case "Change in Substantial Shareholders Interest Pursuant to Form 29B":
						$html = $this->categoryChangesSubstantialShareHolder29B($announce);
						break;
					case "Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965":
					case "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016":
					case "Changes in Director's Interest Pursuant to Section 219 of CA 2016":
						$html = $this->categoryNoticeInterestShareholder($announce);
						break;
					case "Notice of Person Ceasing (29C)":
					case "Notice of Person Ceasing to be a Substantial Shareholder Pursuant to Form 29C of the Companies Act.":
						$html = $this->categoryPersonCeasing($announce);
						break;
					case "Change in Audit Committee":
						$html = $this->categoryChnageAuditCommittee($announce);
						break;
					case "Change in Boardroom":
					case "Change in Boardroom/Chief Executive Officer":
						$html = $this->categoryChnageBoardroom($announce);
						break;
					case "Change in Chief Executive Officer":
						$html = $this->categoryExecutiveOfficer($announce);
						break;
					case "Change in Principal Officer":
						$html = $this->categoryChnagePrincipalOfficer($announce);
						break;
					case "Change of Address":
						$html = $this->categoryChangeAddress($announce);
						break;
					case "Change of Company Secretary":
						$html = $this->categoryCompanySecretary($announce);
						break;
					case "Change of Registrar":
						$html = $this->categoryChangeRegistrarDetail($announce);
						break;
					case "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement":
						$html = $this->categoryResaleCancellation($announce);
						break;
					case "Notice of Shares Buy Back by a Company pursuant to Form 28A":
						$html = $this->categoryNoticeShareBuyBack($announce);
						break;
					case "Notice of Shares Buy Back by a Company pursuant to Form 28B":
						$html = $this->categoryNoticeShareBuyBack28B($announce);
						break;
					case "Notice of Shares Buy Back - Immediate Announcement":
						$html = $this->categoryShareBuyBackImmediate($announce);
						break;
					default:
						$html = $announce['html'];
						break;
				}
				if (!$html) {
					$html = $announce['html'];
				}

				if ($html) {

					Announcement::where('id', '=', $announce['id'])->update(array('crawled' => 1));

					$data = array();
					$data['announcement_id'] = $announce['id'];
					$data['title'] = $announce['title'];
					$data['category'] = $announce['category'];
					$data['date_of_publishing'] = date('Y-m-d', strtotime($announce['date_of_publishing']));
					// $data['date_of_publishing'] = $announce['date_of_publishing'];
					$data['html'] = $html;
					$data['reference_no'] = $announce['reference_no'];
					$data['status'] = $announce['status'];


					// //die;


					CrawledAnnounce::insert($data);
				}
			} catch (\Exception $e) {
				// echo preg_replace ( "/\r|\n/", "", $announce['category']) . '<br>';
				// echo($announce['id']);
				// echo($announce['html']);
				echo "here";
				echo "<pre>";
				// echo ($e->getMessage()) ;
				print_r($e->getTraceAsString());
				echo "</pre>";
			}
		}
		//die;
	}



	private function updateCrawled()
	{
		//$announce = CrawledAnnounce::where ( 'announcement_id', '!=', 0 )->where ( 'id', '=', $crawled_id )->get();
		/*$announcelists = CrawledAnnounce::where ( 'announcement_id', '!=', 0 )->where( 'category', '=', "Change in Audit Committee" )->get();*/
		$announcelists = CrawledAnnounce::where('announcement_id', '!=', 0)->where('status', 1)->orderBy('created_at', 'desc')->take(300)->get();


		//$announcelists = CrawledAnnounce::where ( 'announcement_id', '!=', 0 )->where ( 'id', '=', 267 )->get();
		foreach ($announcelists as $crawled) {

			try {
				$announce = Announcement::where('id', '=', $crawled['announcement_id'])->get()->toArray()[0];
				$html = '';
				$announce['html'] = preg_replace(array('`(<b)([^\w])`i', '`(<i)([^\w])`i'), array("<strong$2", "<em$2"), str_replace(array('</b>', '</i>'), array('</strong>', '</em>'), $announce['html']));
				$cat = trim(preg_replace("/\r|\n/", "", $announce['category']));
				switch ($cat) {
					case 'Entitlement(Notice of Book Closure)':
					case 'Entitlements (Notice of Book Closure)':
						$html = $this->categoryEntitlements($announce['html']);
						break;
					case 'Investor Alert Announcement':
						$html = $this->categoryInvestorAlert($announce['html']);
						break;
					case 'Additional Listing Announcement (ALA)':
					case 'Additional Listing Announcement /Subdivision of Shares':
						$html = $this->categoryAla($announce['html']);
						break;
					case 'Listing Circular':
						$html = $this->categoryListingCircular($announce['html']);
						break;

						//5 Trading of rights announcement

					case 'Financial Results':
					case 'Financial Result Announcement':
						$html = $this->categoryFinancialResults($announce);
						break;
					case 'General Announcement for PLC':
						$announce['category'] = 'General Announcement';
					case 'General Announcement':
						$html = $this->categoryGeneralAnnouncement($announce);
						break;
					case 'General Meeting':
						$announce['category'] = 'General Meetings';
					case 'General Meetings':
						$html = $this->categoryGeneralMeetings($announce);
						break;

					case 'Special Announcements':
						$html = $this->categorySpecialAnnouncements($announce);
						break;

					case "Changes in Director's Interest Pursuant to Section 135 of the Companies Act. 1965":
					case "Change in the Interest of Substantial Shareholder Pursuant to Section 138 of CA 2016":
					case "Changes in Director's Interest Pursuant to Section 135":
						$html = $this->categoryChangesDirectorsInterest($announce);
						break;
					case "Change in Substantial Shareholders Interest Pursuant to Form 29B":
						$html = $this->categoryChangesSubstantialShareHolder29B($announce);
						break;
					case "Changes in Substantial Shareholder's Interest Pursuant to Form 29B of the Companies Act. 1965":
						$html = $this->categoryChangesSubstantialShareHolder($announce);
						break;
					case "Notice of Interest of Substantial Shareholder Pursuant to Form 29A of the Companies Act. 1965":
					case "Notice of Interest of Substantial Shareholder Pursuant to Section 137 of CA 2016":
					case "Changes in Director's Interest Pursuant to Section 219 of CA 2016":
						$html = $this->categoryNoticeInterestShareholder($announce);
						break;
					case "Notice of Person Ceasing (29C)":
					case "Notice of Person Ceasing to be a Substantial Shareholder Pursuant to Form 29C of the Companies Act.":
						$html = $this->categoryPersonCeasing($announce);
						break;
					case 'Change in Nomination Committee':
						$html = $this->categoryChnageNominationCommittee($announce);
						break;
					case "Change in Audit Committee":
						$html = $this->categoryChnageAuditCommittee($announce);
						break;
					case "Change in Boardroom":
					case "Change in Boardroom/Chief Executive Officer":
						$html = $this->categoryChnageBoardroom($announce);
						break;
					case "Change in Chief Executive Officer":
						$html = $this->categoryExecutiveOfficer($announce);
						break;
					case "Change in Principal Officer":
						$html = $this->categoryChnagePrincipalOfficer($announce);
						break;
					case "Change of Address":
						$html = $this->categoryChangeAddress($announce);
						break;
					case "Change of Company Secretary":
						$html = $this->categoryCompanySecretary($announce);
						break;
					case "Change of Registrar":
						$html = $this->categoryChangeRegistrarDetail($announce);
						break;
					case "Notice of Resale/Cancellation of Treasury Shares - Immediate Announcement":
						$html = $this->categoryResaleCancellation($announce);
						break;
					case "Notice of Shares Buy Back by a Company pursuant to Form 28A":
						$html = $this->categoryNoticeShareBuyBack($announce);
						break;
					case "Notice of Shares Buy Back by a Company pursuant to Form 28B":
						$html = $this->categoryNoticeShareBuyBack28B($announce);
						break;
					case "Notice of Shares Buy Back - Immediate Announcement":
						$html = $this->categoryShareBuyBackImmediate($announce);
						break;
				}


				if ($html) {
					/* echo $announce['html'];
				echo "<hr>";
				echo $html; die; */
					CrawledAnnounce::where('id', '=', $crawled['id'])->update(array('html' => $html));
				}
			} catch (\Exception $e) {

				continue;
			}
		}
	}


	private function pr($data)
	{
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}


	private function categoryEntitlements($html = NULL)
	{
		try {
			if ($html) {
				$crawler = new Crawler($html);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('table tr')->each(function (Crawler $node, $i) {
					if ($node->parents()->parents()->attr("id") == 'divRemarks') {
						return false;
					}

					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$nodeValues = $crawler->filter('#divRemarks table tr td')->each(function (Crawler $node, $i) {
					return $node->html();
				});

				$remark = (isset($nodeValues[1])) ? $nodeValues[1] : '';
				$view = View::make('template_entitlements', array(
					'title' => $title,
					'data' => $data,
					'remark' => $remark
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryInvestorAlert($html = NULL)
	{
		try {
			if ($html) {
				$crawler = new Crawler($html);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('#main p')->each(function (Crawler $node, $i) {
					if ($node->html())
						return $node->html();
					else
						return false;
				});

				$nodeValues = array_filter($nodeValues);

				$data = strip_tags(implode("<br><br>", $nodeValues), "<br><p><a><stronng>");

				//$this->pr($nodeValues);

				$view = View::make('template_ala', array(
					'title' => $title,
					'content' => $data
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryAla($html = NULL)
	{
		try {
			if ($html) {
				$crawler = new Crawler($html);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_ala', array(
					'title' => $title,
					'data' => $data
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryListingCircular($html = NULL)
	{
		try {
			if ($html) {

				$crawler = new Crawler($html);
				$title = $crawler->filter('#main > h3')->text();
				$title2 = '';
				$title3 = '';
				$content = array();

				try {
					$title2 = $crawler->filter('#main > h4')->text();
					$title3 = $crawler->filter('ul strong > font')->eq(0)->html();
				} catch (\Exception $e) { }


				$nodeValues = $crawler->filter('table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});



				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}


				try {
					$content = explode("<br><br>", $crawler->filter('ul')->eq(0)->html());
				} catch (\Exception $e) { }






				$list = array();
				$remark = '';
				$listcount = 1;
				foreach ($content as $k => $c) {
					if (str_starts_with(preg_replace("/\r|\n/", "", $c), $listcount . ")")) {
						$list[$listcount] = substr($c, 4, strlen($c));
						$listcount++;
					} else if (str_starts_with(strip_tags($c), "Remark") || $remark != '') {
						$remark .= $c;
					} else if ($listcount > 1 && $remark == '') {
						$list[$listcount - 1] .= "<br>" . $c;
					}
				}
				$view = View::make('template_listing_circular', array(
					'title' => $title,
					'title2' => $title2,
					'title3' => $title3,
					'list' => $list,
					'remark' => $remark,
					'data' => $data
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryFinancialResults($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h3')->text();

				/* $nodeValues = $crawler->filter ( 'table.formContentTable tr' )->each ( function (Crawler $node, $i) {
					return $node->children()->each ( function (Crawler $n, $i) {
						return $n->text ();
					} );
				} ); */
				$nodeValues = $crawler->filter('table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});
				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace(array("/\r|\n/", "/\s+/"), array("", " "), $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}



				/***** Attachment ************/

				$data['Attachments'] = $crawler->filter('table.att_table p.att_download_pdf a')->text();

				/**************Currency Detail ******************/

				$data['CurrTitle'] = strip_tags(str_replace('<br>', ' ', $crawler->filter('#Tab1  tr td')->eq(0)->html()));

				$tableValues = $crawler->filter('table.ven_table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});


				//$this->pr($data); die;

				$view = View::make('template_financial_results', array(
					'title' => $title,
					'data' => $data,
					'attached' => 'http://bursa.fareastholdingsbhd.com/attachments/' . $html['attachment_location_ondisk'],
					'tableValues' => $tableValues
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// exception
		}
		return;
	}

	private function categoryGeneralAnnouncement($html = NULL)
	{

		if ($html['html']) {
			$crawler = new Crawler($html['html']);
			try {
				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('table.InputTable2 > tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $j) {
						return preg_replace('/style=".*?"/', '', $n->html());
					});
				});
				$nodeValues = array_filter($nodeValues);

				$data = array();

				foreach ($nodeValues as  $k => $node) {
					if ($k == 3) {
						$data['Bottom Footer'] = $node[0];
					} else {
						$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? strip_tags($node[1], "<p><strong><em>") : '';
					}
				}


				$nodeValues = $crawler->filter('table > tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $j) {
						return preg_replace('/style=".*?"/', '', $n->html());
					});
				});
				$nodeValues = array_filter($nodeValues);

				$data2 = array();

				foreach ($nodeValues as  $k => $node) {
					$data2[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? strip_tags($node[1], "<p><strong><em>") : '';
				}

				$data = array_merge($data2, $data);

				if ($crawler->filter('table.att_table p.att_download_pdf a')->count() > 0) {
					$data['Attachments'] = $crawler->filter('table.att_table p.att_download_pdf a')->text();
				}


				$view = View::make('template_general_announcments', array(
					'subtitle' => $title,
					'data' => $data,
					'attached' => 'http://bursa.fareastholdingsbhd.com/attachments/' . $html['attachment_location_ondisk']
				));

				$sections = $view->renderSections();

				return $sections['content'];
			} catch (\Exception $e) {
				echo $html['id'];
			}
		}
		return;
	}

	private function categoryGeneralMeetings($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('#main table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});
				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				if ($crawler->filter('table.att_table p.att_download_pdf a')->count() > 0) {
					$data['Attachments'] = $crawler->filter('table.att_table p.att_download_pdf a')->text();
				}

				$view = View::make('template_general_meetings', array(
					'attached' => 'http://bursa.fareastholdingsbhd.com/attachments/' . $html['attachment_location_ondisk'],
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categorySpecialAnnouncements($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('#main > p')->each(function (Crawler $node, $i) {
					return $n->html();
				});

				$data = implode('</p><p>', array_filter($nodeValues));

				$view = View::make('template_special_announcement', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}
	private function categoryChangesDirectorsInterest($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h3')->text();

				$nodeValues = $crawler->filter('#main table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$dataTable = $crawler->filter('.ven_table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});
				$footnote = explode("<br><br>", $crawler->filter('table tr td.FootNote')->html());
				end($footnote);
				unset($footnote[key($footnote)]);
				foreach ($footnote as $key => $foot) {
					$length = strpos($foot, " ", 0);
					$substrKey = substr($foot, $length);

					$footnote[$key] = $substrKey;
				}
				// $this->pr($footnote);
				$view = View::make('template_director_interest', array(
					'data' => $data,
					'dataTable' => $dataTable,
					'footnote' => $footnote
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}

		return;
	}

	private function categoryChangesSubstantialShareHolder($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h4')->text();

				$nodeValues = $crawler->filter('#main table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$dataTable = $crawler->filter('.ven_table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$view = View::make('template_substantial_shareholder', array(
					'title' => $title,
					'data' => $data,
					'dataTable' => $dataTable
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChangesSubstantialShareHolder29B($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h4')->text();

				$nodeValues = $crawler->filter('#main table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$dataTable = $crawler->filter('.ven_table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$view = View::make('template_substantial_shareholder29B', array(
					'title' => $title,
					'data' => $data,
					'dataTable' => $dataTable
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryNoticeInterestShareholder($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				$title = $crawler->filter('#main > h4')->text();

				$nodeValues = $crawler->filter('#main table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				//   $this->pr($data);
				$view = View::make('template_notice_shareholder', array(
					'title' => $title,
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChnageAuditCommittee($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}
				$composition = $crawler->filter('table.InputTable2 tr:last-child td:last-child')->html();
				$footnote = explode("<br>", $composition);

				$view = View::make('template_change_audit_committee', array(
					'data' => $data,
					'footnote' => $footnote,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChnageNominationCommittee($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}
				$composition = $crawler->filter('table.InputTable2 tr:last-child td:last-child')->html();
				$footnote = explode("<br>", $composition);

				$view = View::make('template_change_nomination_committee', array(
					'data' => $data,
					'footnote' => $footnote,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChnageBoardroom($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				//$this->pr($data);
				$view = View::make('template_change_boardroom', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChnagePrincipalOfficer($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$nodeValues = $crawler->filter('#divRemarks table tr td')->each(function (Crawler $node, $i) {
					return $node->html();
				});

				$remark = (isset($nodeValues[1])) ? $nodeValues[1] : '';

				// $this->pr($data);
				$view = View::make('template_change_principal_officer', array(
					'data' => $data,
					'remark' => $remark
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChangeAddress($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);

				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}
				$data = array_change_key_case($data);
				$view = View::make('template_change_address', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryChangeRegistrarDetail($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_registrar_detail', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryResaleCancellation($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_resale_cancellation', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryNoticeShareBuyBack($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_notice_share_buy_back', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception  $e) {
			// Exception
		}
		return;
	}

	private function categoryShareBuyBackImmediate($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_share_buy_back_immediate', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryNoticeShareBuyBack28B($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_notice_share_buy_back28B', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryPersonCeasing($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_person_ceasing', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryExecutiveOfficer($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_executive_officer', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}

	private function categoryCompanySecretary($html = NULL)
	{
		try {
			if ($html['html']) {
				$crawler = new Crawler($html['html']);

				//$title = $crawler->filter ( '#main > h4' )->text();

				$nodeValues = $crawler->filter('table.InputTable2 tr')->each(function (Crawler $node, $i) {
					return $node->children()->each(function (Crawler $n, $i) {
						return $n->text();
					});
				});

				$nodeValues = array_filter($nodeValues);
				$data = array();

				foreach ($nodeValues as $node) {
					$data[($node[0]) ? trim(preg_replace("/\r|\n/", "", $node[0])) : ''] = (isset($node[1])) ? $node[1] : '';
				}

				$view = View::make('template_company_secretary', array(
					'data' => $data,
				));

				$sections = $view->renderSections();

				return $sections['content'];
			}
		} catch (\Exception $e) {
			// Exception
		}
		return;
	}
}
